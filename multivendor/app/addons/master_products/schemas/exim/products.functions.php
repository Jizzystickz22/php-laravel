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

defined('BOOTSTRAP') or die('Access denied');

use Tygh\Addons\MasterProducts\Product\Manager;
use Tygh\Enum\Addons\MasterProducts\EximProducts;
use Tygh\Tygh;

/**
 * Filters out master products from vendor products when exporting them.
 *
 * @param array    $pattern    Exim pattern definition
 * @param array    $options    Export options
 * @param string[] $conditions Products selection conditions
 * @param int      $company_id Runtime company ID
 */
function fn_master_products_exim_filter_products_by_company(array $pattern, array $options, &$conditions, $company_id)
{
    if (isset($options['master_products.exported_products'])) {
        $exclusive_condition = fn_get_company_condition($pattern['table'] . '.company_id', false, $company_id);
        $inclusive_condition = fn_get_company_condition($pattern['table'] . '.company_id', false, $company_id, true);
        $zero_condition = db_quote('?f.company_id = ?i', $pattern['table'], 0);

        switch ($options['master_products.exported_products']) {
            case EximProducts::PRODUCTS_BEING_SOLD:
                if (!$company_id) {
                    $conditions[] = db_quote(' ?f.company_id <> ?i', $pattern['table'], 0);
                }
                break;
            case EximProducts::PRODUCTS_THAT_VENDORS_CAN_SELL:
                $conditions = array_map(function ($c) use ($exclusive_condition, $zero_condition) {
                    return str_replace($exclusive_condition, $zero_condition, $c);
                }, $conditions);
                break;
            case EximProducts::PRODUCTS_ALL:
                if ($company_id) {
                    $conditions = array_map(function ($c) use ($exclusive_condition, $inclusive_condition) {
                        return str_replace($exclusive_condition, $inclusive_condition, $c);
                    }, $conditions);
                }
                break;
        }
    }

    return;
}

/**
 * Sets company ID as the additional key for products import.
 *
 * @param array $alt_keys                   Alternative keys
 * @param bool  $skip_get_primary_object_id Whether to skip object fetching
 * @param int   $company_id                 Runtime company ID
 */
function fn_master_products_exim_set_company_id(
    array &$alt_keys,
    &$skip_get_primary_object_id,
    $company_id
) {
    if (!empty($alt_keys['company_id']) && $company_id) {
        $alt_keys['company_id'] = [$alt_keys['company_id'], 0];
    }

    if (!empty($alt_keys['company_id'])) {
        return;
    }

    if ($skip_get_primary_object_id) {
        $alt_keys['company_id'] = 0;
        $skip_get_primary_object_id = false;
    }
}

/**
 * Updates vendor products' descriptions and categories when importing a master product.
 *
 * @param array $primary_object_id Primary object definition
 *
 * @throws \Tygh\Exceptions\DatabaseException
 * @throws \Tygh\Exceptions\DeveloperException
 */
function fn_master_products_exim_update_vendor_products_descriptions(array $primary_object_id)
{
    if (!isset($primary_object_id['product_id'])) {
        return;
    }

    $master_product_id = $primary_object_id['product_id'];

    /** @var \Tygh\Addons\MasterProducts\Product\Manager $product_manager */
    $product_manager = Tygh::$app['addons.product_variations.product.manager'];

    $vendor_product_ids_list = $product_manager->getVendorProductIds($master_product_id);

    foreach ($vendor_product_ids_list as $vendor_product_id) {
        $product_manager->cloneProductDescriptions($master_product_id, $vendor_product_id);
        $product_manager->cloneProductCategories($master_product_id, $vendor_product_id);
        $product_manager->cloneProductFeaturesValues($master_product_id, $vendor_product_id);
    }
}

/**
 * Removes fields that can't be edited for a vendor product from an imported product.
 *
 * @param array $pattern           Exim pattern definition
 * @param array $primary_object_id Primary object defintion
 * @param array $object            Imported product
 * @param bool  $skip_record       Whether to skip record
 */
function fn_master_products_exim_unset_vendor_products_fields(
    array $pattern,
    array $primary_object_id,
    array &$object,
    $skip_record
) {
    if (!isset($primary_object_id['product_id'])) {
        return;
    }

    if ($skip_record) {
        return;
    }

    $product_id = $primary_object_id['product_id'];

    /** @var \Tygh\Addons\MasterProducts\Product\Manager $product_manager */
    $product_manager = Tygh::$app['addons.product_variations.product.manager'];
    /** @var \Tygh\Addons\MasterProducts\Product\Type $product_type */
    $product_type = $product_manager->getProductTypeInstanceByProductId($product_id);

    if ($product_manager->getVendorProduct($product_id)) {
        foreach ($object as $field => $value) {
            if (isset($pattern['export_fields'][$field]['field_aliases'])) {
                foreach ($pattern['export_fields'][$field]['field_aliases'] as $aliased_field) {
                    if (!$product_type->isFieldAvailableForVendorProduct($aliased_field)) {
                        unset($object[$field]);
                        break;
                    }
                }
            } else {
                if (!$product_type->isFieldAvailableForVendorProduct($field)) {
                    unset($object[$field]);
                }
            }
        }
    }
}

/**
 * Prevents vendors from creating new products if the "Allow vendors to create products" setting is disabled.
 *
 * @param array $primary_object_id Primary object defintion
 * @param array $object            Imported product
 * @param bool  $skip_record       Whether to skip record
 * @param array $processed_data    Import stats
 */
function fn_master_products_exim_skip_product_creation(
    array $primary_object_id,
    array &$object,
    &$skip_record,
    array &$processed_data
) {
    if (!$skip_record && !isset($primary_object_id['product_id'])) {
        $skip_record = true;

        $type = isset($object['product_type'])
            ? $object['product_type']
            : Manager::PRODUCT_TYPE_SIMPLE;

        $processed_data['by_types'][$type]['N']--;
        $processed_data['by_types'][$type]['S']++;

        $object['is_skipped_from_processing'] = true;
    }
}

/**
 * Converts common product into a vendor product.
 *
 * @param array $primary_object_id  Primary object defintion
 * @param array $object             Imported product
 * @param array $processed_data     Import stats
 * @param bool  $skip_record        Whether to skip record
 * @param int   $runtime_company_id Runtime company ID
 *
 * @throws \Tygh\Exceptions\DatabaseException
 * @throws \Tygh\Exceptions\DeveloperException
 */
function fn_master_products_exim_sell_master_product(
    array &$primary_object_id,
    array &$object,
    array &$processed_data,
    &$skip_record,
    $runtime_company_id
) {
    if (!isset($primary_object_id['product_id'])) {
        return;
    }

    if (!empty($object['is_skipped_from_processing'])) {
        return;
    }

    $product_id = $primary_object_id['product_id'];

    /** @var \Tygh\Addons\MasterProducts\Product\Manager $product_manager */
    $product_manager = Tygh::$app['addons.product_variations.product.manager'];

    if (!$product_manager->getVendorProduct($product_id)) {

        $company_id = isset($object['company_id'])
            ? $object['company_id']
            : (int) $runtime_company_id;

        $vendor_product = $product_manager->createVendorProduct($product_id, $company_id);
        if ($vendor_product->isSuccess()) {
            $primary_object_id['product_id'] = $object['product_id'] = $vendor_product->getData()['vendor_product_id'];

            $type = $vendor_product->getData()['vendor_product_exists']
                ? 'E'
                : 'N';

            $product_type = $product_manager->getProductFieldValue($product_id, 'product_type');

            $processed_data['by_types'][$product_type][$type]++;
            $processed_data['by_types'][$product_type]['S']--;

            $skip_record = false;
        }
    }
}

/**
 * Actualizes master products' prices if the vendor product were updated with the import.
 *
 * @param array[] $primary_object_ids Primary objects defintion
 */
function fn_master_products_exim_actualize_master_products_prices($primary_object_ids)
{
    foreach ($primary_object_ids as $primary_object_id) {
        if (!isset($primary_object_id['product_id'])) {
            continue;
        }

        $product_id = $primary_object_id['product_id'];

        /** @var \Tygh\Addons\MasterProducts\Product\Manager $product_manager */
        $product_manager = Tygh::$app['addons.product_variations.product.manager'];

        if ($product_manager->getVendorProductIds($product_id)) {
            $product_manager->actualizeMasterProductPrice($product_id);
        } else {
            $vendor_product = $product_manager->getVendorProduct($product_id);
            if ($vendor_product) {
                $product_manager->actualizeMasterProductPrice($vendor_product['master_product_id']);
            }
        }
    }
}
