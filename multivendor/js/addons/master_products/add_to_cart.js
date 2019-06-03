(function (_, $) {
    /**
     * Copies options into the hidden block near the vendor products' Add to cart button
     * options to add a vendor product to the cart with proper options specified.
     */
    $.ceEvent('on', 'ce.commoninit', function (context) {
        if ($('[data-ca-master-products-element="product_form"]', context).length) {

            $('[data-ca-master-products-element="product_form"]', context).each(function (i, elm) {
                var $elm = $(elm);

                $.ceEvent('on', 'ce.formpre_' + $elm.prop('name'), function () {
                    var masterProductId = $elm.data('caMasterProductsMasterProductId'),
                        $optionInputs = $('input,select,textarea', '.cm-reload-' + masterProductId),
                        $optionsContainer = $('.ty-sellers-list__options', $elm);

                    if (!$optionInputs.length || !$optionsContainer.length) {
                        return;
                    }

                    $optionsContainer.empty();

                    $optionInputs.each(function (i, elm) {
                        var $elm = $(elm);

                        if (/^product_data\[\d+\]\[product_options\]\[\d+\]/.test($elm.prop('name')) ||
                            /^product_data\[custom_files\]\[\d+\]/.test($elm.prop('name')) ||
                            /^type_product_data\[\d+\]/.test($elm.prop('name'))
                        ) {
                            var $clonedInput = $elm.clone(true);
                            $clonedInput.val($elm.val());
                            $optionsContainer.append($clonedInput);

                        } else if (/^file_product_data\[\d+\]/.test($elm.prop('name'))) {
                            // files must be moved to the vendor product form and replaced with their clone in the original form
                            var $clonedFileInput = $elm.clone(),
                                $fileInputContainer = $elm.parent();
                            $optionsContainer.append($elm);
                            $fileInputContainer.append($clonedFileInput);
                        }
                    });
                });
            });
        }
    });
})(Tygh, Tygh.$);
