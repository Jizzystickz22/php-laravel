{if $runtime.company_id && !$product.company_id}
    <!-- Overridden by the Common Products for Vendors add-on -->
{elseif $product.is_vendor_product}
    <li>{btn type="list" text=__("edit") href="products.update?product_id=`$product.product_id`"}</li>
{/if}