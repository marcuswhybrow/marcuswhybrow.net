<?php get_header(); ?>

<div id="content" class="container">
    <?php is_tag(); ?>
    <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
            <h1>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h1>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <h1>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <h1>Archive for <?php the_time('F jS, Y'); ?></h1>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <h1>Archive for <?php the_time('F, Y'); ?></h1>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <h1>Archive for <?php the_time('Y'); ?></h1>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <h1>Author Archive</h1>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <h1>Blog Archives</h1>
        <?php } ?>

        <ul class="posts">
        <?php $thisPost = ''; $lastPost = ''; ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
                if (is_author()) { $thisPost = get_the_time('Y'); } 
                elseif (is_year()) { $thisPost = get_the_time('F'); }
            ?>
            <?php if($thisPost != $lastPost) { ?>
                </ul>
                <h3><?php echo $thisPost ?></h3>
                <ul class="posts">
            <?php } ?>
            <li><span><?php the_time('d M Y') ?></span> » <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
            <?php $lastPost = $thisPost; ?>
        <?php endwhile; ?>
        </ul>

        <div id="postnavigation">
            <p><?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
        </div> <!-- end #postnavigation -->
 
    <?php else : ?>

        <h2>Not Found</h2>
        <p>Try using the search form below</p>
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>

    <?php endif; ?>
</div><!-- end #content -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
