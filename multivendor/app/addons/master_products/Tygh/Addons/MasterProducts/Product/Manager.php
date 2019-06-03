<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Addons\MasterProducts\Product;

use Tygh\Addons\ProductVariations\Product\Manager as BaseManager;
use Tygh\Common\OperationResult;
use Tygh\Exceptions\DatabaseException;
use Tygh\Exceptions\DeveloperException;

class Manager extends BaseManager
{
    /** @var bool $is_variation_creation_allowed */
    private $is_variation_creation_allowed = false;

    /**
     * Provides vendor product ID of the specified master product ID.
     *
     * @param int $master_product_id Master product ID
     * @param int $company_id        Vendor company ID
     *
     * @return int|false Vendor product ID or false if none found
     */
    public function getVendorProductId($master_product_id, $company_id)
    {
        if (!$master_product_id) {
            return false;
        }

        $id = $this->db->getField(
            'SELECT products.product_id FROM ?:products AS products'
            . ' INNER JOIN ?:products AS master_products ON master_products.product_id = products.parent_product_id'
            . ' AND master_products.product_type = products.product_type'
            . ' WHERE master_products.product_id = ?i AND products.company_id = ?i',
            $master_product_id,
            $company_id
        );

        if ($id) {
            return (int) $id;
        }

        return false;
    }

    /**
     * Gets list of vendor products IDs.
     *
     * @param int           $master_product_id Master product ID
     * @param string[]|null $status            Status of vendor products. Set to null to disable filtering
     *
     * @return int[] Vendor product IDs
     */
    public function getVendorProductIds($master_product_id, array $status = null)
    {
        if (!$master_product_id) {
            return [];
        }

        $conditions = [
            'master_product_id' => $this->db->quote('master_products.product_id = ?i', $master_product_id),
        ];

        if ($status !== null) {
            $conditions['status'] = $this->db->quote('AND products.status IN (?a)', $status);
        }

        $condition = implode(' ', $conditions);

        $ids = $this->db->getColumn(
            'SELECT products.product_id FROM ?:products AS products'
            . ' INNER JOIN ?:products AS master_products ON master_products.product_id = products.parent_product_id'
            . ' AND master_products.product_type = products.product_type'
            . ' WHERE ?p',
            $condition
        );

        if ($ids) {
            return array_map('intval', $ids);
        }

        return [];
    }

    /**
     * Gets vendor product parentness information.
     *
     * @param int $vendor_product_id
     *
     * @return array|bool
     */
    public function getVendorProduct($vendor_product_id)
    {
        if (!$vendor_product_id) {
            return false;
        }

        $vendor_product = $this->db->getRow(
            'SELECT products.product_id, master_products.product_id AS master_product_id, products.company_id, products.product_type'
            . ' FROM ?:products AS products'
            . ' INNER JOIN ?:products AS master_products ON master_products.product_id = products.parent_product_id'
            . ' AND master_products.product_type = products.product_type'
            . ' WHERE products.product_id = ?i',
            $vendor_product_id
        );

        if ($vendor_product) {
            return $vendor_product;
        }

        return false;
    }

    /**
     * Creates a vendor product from a master product.
     *
     * @param int $master_product_id Master product ID
     * @param int $company_id        Vendor company ID
     *
     * @return \Tygh\Common\OperationResult Operation result with vendor product ID
     * @throws \Tygh\Exceptions\DatabaseException
     * @throws \Tygh\Exceptions\DeveloperException
     */
    public function createVendorProduct($master_product_id, $company_id)
    {
        $master_product_type = $this->getProductFieldValue($master_product_id, 'product_type');

        if ($master_product_type === self::PRODUCT_TYPE_VARIATION && !$this->is_variation_creation_allowed) {
            $master_product_id = $this->getProductFieldValue($master_product_id, 'parent_product_id');
            return $this->createVendorProduct($master_product_id, $company_id);
        }

        $result = $this->cloneProduct($master_product_id, $company_id);
        if (!$result->isSuccess()) {
            return $result;
        }

        $clone_details = $result->getData();
        if (!$clone_details['vendor_product_exists']) {
            $this->cloneProductPrices($master_product_id, $clone_details['vendor_product_id']);
            $this->cloneProductDescriptions($master_product_id, $clone_details['vendor_product_id']);
            $this->cloneProductCategories($master_product_id, $clone_details['vendor_product_id']);
            $this->cloneProductFeaturesValues($master_product_id, $clone_details['vendor_product_id']);

            if ($master_product_type === self::PRODUCT_TYPE_CONFIGURABLE) {
                $this->is_variation_creation_allowed = true;
                $variations = $this->getProductVariations($master_product_id);
                foreach ($variations as $variation_product_id) {
                    $this->createVendorProduct($variation_product_id, $company_id);
                }
                $this->is_variation_creation_allowed = false;
            }

            $this->actualizeMasterProductPrice($master_product_id);
        }

        return $result;
    }

    /**
     * Clones product data from ?:products table.
     *
     * @param int $master_product_id Product ID
     * @param int $company_id        Vendor company ID
     *
     * @return \Tygh\Common\OperationResult Vendor product ID creation result
     * @throws \Tygh\Exceptions\DatabaseException
     * @throws \Tygh\Exceptions\DeveloperException
     */
    private function cloneProduct($master_product_id, $company_id)
    {
        $result = new OperationResult(true);
        $vendor_product_id = $this->getVendorProductId($master_product_id, $company_id);
        if ($vendor_product_id) {
            $result->setData([
                'vendor_product_exists' => true,
                'vendor_product_id'     => $vendor_product_id,
            ]);

            return $result;
        }

        $product = $this->db->getRow(
            'SELECT * FROM ?:products WHERE product_id = ?i AND company_id = ?i',
            $master_product_id,
            0
        );
        if (!$product) {
            $result->setSuccess(false);
        }

        $product['parent_product_id'] = $master_product_id;
        $product['company_id'] = $company_id;

        unset($product['product_id'], $product['variation_code'], $product['variation_options'], $product['is_default_variation']);

        $vendor_product_id = $this->db->query('INSERT INTO ?:products ?e', $product);
        $result->setData([
            'vendor_product_exists' => false,
            'vendor_product_id'     => $vendor_product_id,
        ]);

        return $result;
    }

    /**
     * Clones product prices from ?:product_prices table.
     *
     * @param int $master_product_id Master product ID
     * @param int $vendor_product_id Vendor product ID
     *
     * @throws \Tygh\Exceptions\DatabaseException
     * @throws \Tygh\Exceptions\DeveloperException
     */
    private function cloneProductPrices($master_product_id, $vendor_product_id)
    {
        $prices = $this->db->getArray('SELECT * FROM ?:product_prices WHERE product_id = ?i', $master_product_id);

        foreach ($prices as &$price) {
            $price['product_id'] = $vendor_product_id;
        }
        unset($price);

        $this->db->query('INSERT INTO ?:product_prices ?m', $prices);
    }

    /**
     * Clones product descriptions from ?:product_descriptions table.
     *
     * @param int    $master_product_id Master product ID
     * @param int    $vendor_product_id Vendor product ID
     * @param string $lang_code         Two-letter language code
     */
    public function cloneProductDescriptions($master_product_id, $vendor_product_id, $lang_code = null)
    {
        $condition = $this->db->quote('AND product_id = ?i', $master_product_id);
        if ($lang_code !== null) {
            $condition .= $this->db->quote(' AND lang_code = ?s', $lang_code);
        }

        $descriptions = $this->db->getArray('SELECT * FROM ?:product_descriptions WHERE 1 ?p', $condition);

        foreach ($descriptions as $description) {
            $description['product_id'] = $vendor_product_id;
            $this->db->replaceInto('product_descriptions', $description);
        }
    }

    /**
     * @inheritdoc
     *
     * @param string $type
     *
     * @return \Tygh\Addons\MasterProducts\Product\Type
     */
    public function getProductTypeInstance($type)
    {
        if (!$this->isProductTypeExists($type)) {
            $type = self::PRODUCT_TYPE_SIMPLE;
        }

        if (!isset($this->types_cache[$type])) {
            $this->types_cache[$type] = new Type($this->getProductTypeSchema($type));
        }

        return $this->types_cache[$type];
    }

    /**
     * Clones product features values from ?:product_features_values table.
     *
     * @param int $master_product_id Master product ID
     * @param int $vendor_product_id Vendor product ID
     */
    public function cloneProductFeaturesValues($master_product_id, $vendor_product_id)
    {
        $features_values = $this->db->getArray(
            'SELECT * FROM ?:product_features_values WHERE product_id = ?i',
            $master_product_id
        );
        if (!$features_values) {
            return;
        }

        foreach ($features_values as &$feature_value) {
            $feature_value['product_id'] = $vendor_product_id;
        }
        unset($feature_value);

        try {
            $this->db->query('DELETE FROM ?:product_features_values WHERE product_id = ?i', $vendor_product_id);
            $this->db->query('INSERT INTO ?:product_features_values ?m', $features_values);
        } catch (DatabaseException $e) {
        } catch (DeveloperException $e) {
        }
    }

    /**
     * Sets minimal price of all vendor product prices as the master product price.
     *
     * @param int $master_product_id Master product ID
     */
    public function actualizeMasterProductPrice($master_product_id)
    {
        $vendor_product_ids = $this->getVendorProductIds($master_product_id, ['A']);
        if (!$vendor_product_ids) {
            return;
        }

        $master_product_price = 0;
        foreach ($vendor_product_ids as $vendor_product_id) {
            $vendor_product_data = [];
            fn_get_product_prices($vendor_product_id, $vendor_product_data, []);
            $vendor_product_price = (float) reset($vendor_product_data['prices'])['price'];
            if (!$master_product_price || $vendor_product_price && $vendor_product_price < $master_product_price) {
                $master_product_price = $vendor_product_price;
            }
        }

        fn_update_product_prices($master_product_id, [
            'price'  => $master_product_price,
        ]);
    }
}
