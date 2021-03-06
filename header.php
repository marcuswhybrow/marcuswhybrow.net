<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if ( !wp_title('', true, 'left') ); { ?> | <?php bloginfo('description'); ?> <?php } ?></title>
    <meta name="generator" content="WordPress"> <!-- leave this for stats (or remove for potential security reasons) -->
    <meta name="author" content="Marcus Whybrow">

    <!-- start Wordpress head -->
    <?php wp_head(); ?>	
    <!-- end Wordpress head -->
        
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection">
    <!--[if IE]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie.css" type="text/css" media="screen, projection"><![endif]-->
    
        
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.extendopage.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.tweet.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.jflickrfeed.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.cycle.all.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.hoverflow.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/global.js"></script>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <?php
        $page = '';
        if (is_page('Curriculum Vitae')) $page = 'cv';
        elseif (is_page('Projects')) $page = 'projects';
        elseif (is_front_page()) $page = 'front-page';
        else $page = 'home';
    ?>

</head>
<body id="<?php echo $page; ?>">

<div id="container">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="topTitle">
                <h1><a href="/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div><!-- end #topTitle -->
            <div id="topNav">
                <ul>
                    <li id="tn-home"><a href="/blog/">Blog<span>Get the Latest</span></a></li>
                    <li id="tn-cv"><a href="/cv/">In Depth<span>Curriculum Vitae</span></a></li>
                    <li id="tn-projects"><a href="/projects/">Projects<span>My Bits of Code</span></a></li>
                    <li class="last"><script type="text/javascript">
                    //<![CDATA[
                    <!--
                    var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
                    "=52){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
                    ".substr(0,ol);}f(\")621,\\\"90ET^E330\\\\VDI030\\\\420\\\\400\\\\000\\\\]M6" +
                    "30\\\\n\\\\230\\\\630\\\\500\\\\'J500\\\\400\\\\@/[n\\\\200\\\\220\\\\220\\" +
                    "\\\\\\\\\\+=<(55230\\\\fun\\\\9=2?4p!/m)&j-&\\\"\\\\520\\\\g030\\\\~'-4VJ53" +
                    "0\\\\630\\\\gN\\\\\\\\V130\\\\AZFQKYG\\\\\\\\[N^JGi\\\\\\\\DGQJLA330\\\\Okr" +
                    "t}v8E%qsg|3s-2'`ai771\\\\c{771\\\\)rkanwbo230\\\\\\\"(f};o nruter};))++y(^)" +
                    "i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y;2=*y))y+621(>i(fi{)++i;l<i;0=i" +
                    "(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"                         ;
                    while(x=eval(x));
                    //-->
                    //]]>
                    </script><noscript><a class="disabled">Contact<span>Requires JS</span></a></noscript></li>
                    <div class="clear"></div>
                </ul>
            </div><!-- end #topNav -->
            
            <div id="social-media">
                <ul>
                    <li class="sm-github"><a href="http://github.com/marcuswhybrow">github.com</a></li>
                    <li class="sm-flickr"><a href="http://flickr.com/marcuswhybrow">flickr.com</a></li>
                    <li class="sm-twitter"><a href="http://twitter.com/marcuswhybrow">twitter.com</a></li>
                    <li class="sm-ember"><a href="http://emberapp.com/marcuswhybrow">emberapp.com</a></li>
                    <li class="sm-facebook"><a href="http://facebook.com/marcuswhybrow">facebook.com</a></li>
                    <li class="sm-lastfm"><a href="http://last.fm/user/marcuswhybrow">last.fm</a></li>
                    <li class="sm-linkedin"><a href="http://uk.linkedin.com/in/marcuswhybrow">linkedin.com</a></li>
                </ul>
            </div>
        </div><!-- end #header -->
    </div>
