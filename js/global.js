$(function() {
    
    // Activate extendo page (my plugin)
    $('#older-posts a').extendoPage('#post-list .post', '#post-list', {
        spinnerImage: '/wp-content/themes/MarcusWhybrowTheme/images/ajax-loader.gif',
        recursiveLink: '#older-posts a'
    });
});
