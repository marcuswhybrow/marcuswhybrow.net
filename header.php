<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<title><?php if (is_home()) { echo bloginfo('name');
			} elseif (is_404()) {
			echo '404 Not Found';
			} elseif (is_category()) {
			echo 'Category:'; wp_title('');
			} elseif (is_search()) {
			echo 'Search Results';
			} elseif ( is_day() || is_month() || is_year() ) {
			echo 'Archives:'; wp_title('');
			} else {
			echo wp_title('');
			}
			?></title>

		<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
		<meta name="description" content="<?php bloginfo('description') ?>" />
		<?php if(is_search()) { ?><meta name="robots" content="noindex, nofollow" /><?php }?>
		
		<meta name="keywords" content="marcus whybrow, twitter, blog, projects" />
		<meta name="author" content="Marcus Whybrow" />

	
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
		
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript">
			google.load("jquery", "1.3.2");
		</script>
		
		<script src="js/jquery.jqtransform.min.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$(function(){
				$("form#searchform").jqTransform();
			});
		</script>

	</head>

	<body>
		
		<div id="all">
		
		<div id="page-wrap" class="clearfix">
		
		<div id="header">
		
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<p><?php bloginfo('description'); ?></p>
		
		<!--
			
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		-->
			<ul>
				<li><a href="/" <?php echo (is_home() || is_single()) ? 'class="this"' : '' ; ?>>Right Now</a></li>
				<li><a href="/cv" <?php echo is_page('Curriculum Vitae') ? 'class="this"' : '' ;  ?>>Curriculum Vitae</a></li>
				<li><a href="/me" <?php echo is_page('About Me') ? 'class="this"' : '' ;  ?>>Me</a></li>
			</ul>
		
		</div> <!-- END #header -->
		
		<div id="content" class="clearfix">