$(function() {
    
    // Footnotes
    var $footnotes = $('#footnotes');
    $footnotes.remove();
    
    $('a.footnote-reference').click(function() {
        var $this = $(this);
        var hash = $this.attr('href');
        var text = $footnotes.find(hash).text();
        var $p = $this.parent('p');
        
        if ($(hash).length == 0) {
            $p.after('<aside id="' + hash.substr(1) + '" class="inline-footnote" style="display:none">' + text + '</aside>');
            $(hash).slideDown();
        }
        
        return false;
    });
    
    // Activate extendo page (my plugin)
    $('#older-posts a').extendoPage('#post-list .post', '#post-list', {
        spinnerImage: '/wp-content/themes/MarcusWhybrowTheme/images/ajax-loader.gif',
        recursiveLink: '#older-posts a'
    });
    
    // Front page tweets
    $('#tweets').tweet({
        username: 'marcuswhybrow',
        join_text: 'auto',
        avatar_size: 0,
        count: 3,
        auto_join_text_default: '',
        auto_join_text_ed: '',
        auto_join_text_ing: '',
        auto_join_text_reply: '',
        auto_join_text_url: '',
        loading_text: 'loading tweets...'
    });
    
    var width;
    var height;
    var scale = 1.5;
    var isOver = false;
    
    $('#flickr').jflickrfeed({
        limit: 20,
        qstrings: {
            id: '36903802@N03'
        },
        itemTemplate: '<li><img src="{{image}}" alt="" /><div>{{title}}</div></li>'
    }, function(data) {
        
        $('#flickr div').hide();
        
        $('#flickr').cycle({
            timeout: 5 * 1000,
            fx: 'scrollUp',
        });
        
        $('#flickr li').hover(function(e) {
            $(this).children('div').fadeIn(100);
        
        }, function(e) {
            $(this).children('div').fadeOut(100);
        });
    });
});
