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
    <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blueprint/ie/css" type="text/css" media="screen, projection"><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection">
        
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.shadowlabels.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/global.js"></script>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    
    <?php
        $page = '';
        if (is_page('Curriculum Vitae')) $page = 'cv';
        elseif (is_page('Projects')) $page = 'projects';
        else $page = 'home';
    ?>

</head>
<body id="<?php echo $page; ?>">

<div id="container">
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="topTitle">
                <h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
            </div><!-- end #topTitle -->
            <div id="topNav">
                <ul>
                    <li id="tn-home"><a href="/">Home<span>Get the Latest</span></a></li>
                    <li id="tn-cv"><a href="/cv/">In Depth<span>Curriculum Vitae</span></a></li>
                    <li id="tn-projects"><a href="/projects/">Projects<span>My Bits of Code</span></a></li>
                    <li><script type="text/javascript">
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
            <a href="http://github.com/marcuswhybrow/marcuswhybrow.net/"><img style="position: absolute; top: 0; left: 0; border: 0;" src="http://s3.amazonaws.com/github/ribbons/forkme_left_gray_6d6d6d.png" alt="Fork me on GitHub" /></a>
        </div><!-- end #header -->
    </div>
