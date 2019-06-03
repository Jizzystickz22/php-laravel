{$product = $products|reset}
{if !$product || $product.is_vendor_product && !$product_type->isFieldAvailableForVendorProduct("is_default_variation")}
    <!-- Overridden by the Common Products for Vendors add-on -->
{/if}
