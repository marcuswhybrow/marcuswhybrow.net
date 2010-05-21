<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> <?php if ( !wp_title('', true, 'left') ); { ?> | <?php bloginfo('description'); ?> <?php } ?></title>
        <meta name="generator" content="WordPress"> <!-- leave this for stats (or remove for potential security reasons) -->
        <meta name="author" content="Marcus Whybrow">
        
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/blueprint/screen.css" type="text/css" media="screen, projection">
        <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/blueprint/print.css" type="text/css" media="print">
        <!--[if lt IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/blueprint/ie/css" type="text/css" media="screen, projection"><![endif]-->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen, projection">
        
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>	
    </head>
<body>

<div id="container">
    <div id="header">
        <div id="topTitle">
            <h1><a href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div><!-- end #topTitle -->
        <div id="topNav">
            <?php wp_page_menu(); ?>
        </div><!-- end #topNav -->
    </div><!-- end #header -->
