$(function() {
    var $container = $('#older-posts');
    var $morePosts = $container.find('a');
    $morePosts.text('+ More Posts');
    
    var url = $morePosts.attr('href');
    var $target = $('#post-list');

    var $spinner = $('<img class="spinner" src="/wp-content/themes/MarcusWhybrowTheme/images/ajax-loader.gif">');

    $morePosts.click(function() {
        // Add ajax-loader spinning gif image
        $container.append($spinner);

        $.get(url, function(data) {
            // Remove the spinner
            $spinner.remove();
            
            // Get data from the next page of posts
            var $response = $(data);
            var $content = $response.find('#content');
            var $posts = $content.find('.post');
            var $link = $content.find('#older-posts a');

            if ($link.length != 0) {
                url = $link.attr('href');
                $morePosts.attr('href', url);
            } else {
                var $message = $('<span class="small">There are no more posts</span>');
                $('#older-posts').append($message);
                
                $morePosts.unbind('click');
                $morePosts.click(function() { return false });
                $morePosts.removeAttr('href');
                $morePosts.addClass('disabled');
                
                $message.fadeIn();
            }
            
            // Insert the new posts into the page
            var $div = $('<div></div>');
            $div.hide();
            $target.append($div);
            
            $posts.each(function() {
                $div.append($(this));
            });

           $div.slideDown();
        });
        return false;
    });
});
