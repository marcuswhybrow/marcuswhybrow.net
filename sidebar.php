<div id="sidebar">
 <ul>
  <!-- Widgetized sidebar, if you have the plugin installed. If you don't have it installed, then I did all this work for nothing! -->
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>

   <?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>
    <?php /* If this is a 404 page */ if (is_404()) { ?>
    <?php /* If this is a category archive */ } elseif (is_category()) { ?>
     <p>You are currently browsing the archives for the <?php single_cat_title(''); ?> category.</p>
    <?php /* If this is a yearly archive */ } elseif (is_day()) { ?>
     <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for the day <?php the_time('l, F jS, Y'); ?>.</p>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
     <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for <?php the_time('F, Y'); ?>.</p>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
     <p>You are currently browsing the <a href="<?php bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for the year <?php the_time('Y'); ?>.</p>
    <?php /* If this is a monthly archive */ } elseif (is_search()) { ?>
     <p>You have searched the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives for '<?php the_search_query(); ?>'.</p>
    <?php /* If this is a monthly archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
     <p>You are currently browsing the <a href="<?php echo bloginfo('url'); ?>/"><?php echo bloginfo('name'); ?></a> blog archives.</p>
    <?php } ?>
   <?php }?>
   
   <li>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
   </li>

   <li>
    <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
   <li>

   <li>
    <h2>Recent Posts</h2>
    <?php get_archives('postbypost', 10); ?>
   </li>

   <li>
    <h2>Monthly Archives</h2>
    <ul>
     <?php wp_get_archives('type=monthly'); ?>
    </ul>
   </li>

   <li>
    <?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>'); ?>
   </li>

   <li>
    <h2>Blogroll</h2>
    <?php wp_list_bookmarks(); ?>
   </li>
  <?php endif; ?>
 </ul>
</div><!-- end #sidebar -->