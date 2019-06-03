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

use Tygh\Registry;

defined('BOOTSTRAP') or die('Access denied');

/** @var string $mode */

/**
 * FIXME: the whole code down below is a copy-paste from the Product variations add-on,
 *         but with the hard-coded `show_master_products_only` condition.
 */
if ($mode === 'list') {
    /** @var \Tygh\SmartyEngine\Core $view */
    $view = Tygh::$app['view'];

    /** @var \Tygh\Addons\MasterProducts\Product\Manager $product_manager */
    $product_manager = Tygh::$app['addons.product_variations.product.manager'];

    $product_id = isset($_REQUEST['product_id']) ? (int) $_REQUEST['product_id'] : 0;
    $runtime_company_id = Registry::get('runtime.company_id');

    $view->assign('product_type', $product_manager->getProductTypeInstance($product_manager::PRODUCT_TYPE_VARIATION));

    if (empty($product_id)) {
        return [CONTROLLER_STATUS_NO_PAGE];
    }

    $vendor_product = $product_manager->getVendorProduct($product_id);
    $product_company_id = $product_manager->getProductFieldValue($product_id, 'company_id');

    $show_master_products_only = true;
    $merge_with_master_products = false;
    $company_id = '';

    $view->assign('allow_add_variations', !$runtime_company_id || $runtime_company_id == $product_company_id);

    if ($vendor_product) {
        $show_master_products_only = false;
        $merge_with_master_products = true;
        $product_id = $vendor_product['master_product_id'];
        $company_id = $vendor_product['company_id'];
        $view->assign('allow_add_variations', false);
    } elseif (!$runtime_company_id || $product_company_id) {
        return [CONTROLLER_STATUS_OK];
    }

    $params = array_merge($_REQUEST, [
        'product_type'               => $product_manager::PRODUCT_TYPE_VARIATION,
        'parent_product_id'          => $product_id,
        'show_master_products_only'  => $show_master_products_only,
        'merge_with_master_products' => $merge_with_master_products,
        'company_id'                 => $company_id
    ]);

    list($products, $search) = fn_get_products($params);
    fn_gather_additional_products_data(
        $products,
        ['get_icon' => true, 'get_detailed' => true, 'get_options' => false, 'get_discounts' => false]
    );

    $view->assign('products', $products);
}
