{if $product_data.is_vendor_product}
    {hook name="products:update_product_name"}
    {if !$product_type->isFieldAvailableForVendorProduct("product")}
        <input type="hidden"
               name="product_data[product]"
               value="{$product_data.product}"
        />
        <!-- Overridden by the Common Products for Vendors add-on -->
    {/if}
    {/hook}
{/if}