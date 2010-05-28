$(function() {
    
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
    
    $('#flickr').jflickrfeed({
        limit: 20,
        qstrings: {
            id: '36903802@N03'
        },
        itemTemplate: '<li><img src="{{image}}" alt="" /><div>{{title}}</div></li>'
    }, function(data) {
        $('#flickr div').hide();
        
        $('#flickr').cycle({
            timeout: 10000
        });
        
        $('#flickr li').hover(function(e) {
            var $this = $(this);
            $this.hoverFlow(e.type, {
                width: '360px',
                height: '239px',
                left: '-5px',
                top: '-4px'
            }, 200);
            $this.children('div').fadeIn(100)
        }, function(e) {
            var $this = $(this);
            $this.children('div').fadeOut(100);
            $this.hoverFlow(e.type, {
                width: '350px',
                height: '232px',
                left: '0',
                top: '0'
            }, 200);
        });
    });
});
