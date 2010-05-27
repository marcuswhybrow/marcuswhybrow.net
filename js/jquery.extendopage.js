(function($) {
    $.fn.extendoPage = function(findSelector, targetSelector, options) {
        var opts = $.extend({}, $.fn.extendoPage.defaults, options);

        return this.each(function() {
            var $link = $(this);
            var $spinner = $('<img class="spinner">');
            var $message = $('<span class="small"></span').text(opts['message']);
            // Get the link to the next page
            var url = $link.attr('href');
            
            $link.text(opts['newText']);
            
            $link.click(function() {
                // If spinner image was set, add the spinner
                if (opts['spinnerImage'] != null) {
                    $spinner.attr('src', opts['spinnerImage']);
                    $link.after($spinner);
                }
                
                $.get(url, function(data) {
                    // Remove the spinner
                    $spinner.remove(); 
                    
                    // Get data from the next page
                    var $data = $(data);
                    var $items = $data.find(findSelector);
                    
                    console.log($items);
                    
                    // Insert new items into the page
                    var $div = $('<div></div>').hide();
                    $(targetSelector).append($div);

                    $items.each(function() {
                       $div.append($(this)); 
                    });

                    $div.slideDown();
                    
                    // Update link
                    if (opts['recursiveLink'] != null) {
                        var $nextLink = $data.find(opts['recursiveLink']);
                        if ($nextLink.length != 0) {
                            url = $nextLink.attr('href');
                            $link.attr('href', url);
                        } else {
                            // Tell the user there are no more pages
                            $link.after($message);
                            
                            // Prevent further clicks
                            $link.unbind('click')
                                 .click(function() { return false })
                                 .removeAttr('href')
                                 .addClass('disabled');
                            
                            $message.fadeIn();
                        }
                    }
                });
                
                return false;
            });
        });
    };

    // Default options
    $.fn.extendoPage.defaults = {
        spinnerImage: null,
        recursiveLink: null,
        message: 'There are no more posts',
        newText: '+ More Posts',
    };
    
})(jQuery);