/* 
* Shadow Labels (1.0)
* by Marcus Whybrow (marcuswhybrow.net)
* marcus@marcuswhybrow.net
*
* NOTE: This script requires jQuery to work.  Download jQuery at www.jquery.com
*
*/

(function($) {

    $.fn.shadowLabels = function(options) {
        var opts = $.extend({}, $.fn.shadowLabels.defaults, options);
        
        var criteria = '';
        if (opts['text']) criteria += "input[type='text']";
        if (opts['textarea']) criteria += ", textarea";

        $(this).each(function(options) {
            var $form = $(this);

            $form.find(criteria).each(function() {
                // Get the input and label pair
                var $input = $(this);
                var $label = $form.find("label[for='" + $input.attr('id') + "']");
                
                // Capture the existing value attribute of the input element (if any)
                var oldValue = $input.attr('value');
                
                // Construct the new value
                var newValue = $label.text();
                // Remove a colon that might be on the end
                newValue = newValue.replace(/:$/, '');
                
                if (opts['showValue'] && oldValue != '')
                    newValue += ' (' + oldValue + ')';
                
                // Set the new value of the input element
                $input.val(newValue);
                $input.addClass('default');

                // Bind a focus event to the input
                $input.focus(function() {
                    if ($input.is('.default')) {
                        $input.val('');
                        $input.removeClass('default');
                    }
                });

                // Bind a blur event to the input
                $input.blur(function() {
                    if ($input.val() == '') {					
                        $input.val(newValue);
                        $input.addClass('default');
                    }
                })

                // The label element is no longer needed, so remove it from the DOM
                $label.remove();
            });

            // Bind a submit event to the form itself, i
            $form.submit(function() {
                $form.find('input').each(function() {
                    var $input = $(this);
                    
                    if ($input.is('.default')) {
                        $input.val('');
                    }
                });
            });

        });
    };
    
    // Default options
    $.fn.shadowLabels.defaults = {
        text: true,
        textarea: true,
        showValues: false,
    };

})(jQuery);