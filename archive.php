<?php get_header(); ?>

<div id="content">
    <?php is_tag(); ?>
        <?php if (have_posts()) : ?>

            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
            <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
            <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2>Archive for <?php the_time('F jS, Y'); ?></h2>
            <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2>Archive for <?php the_time('F, Y'); ?></h2>
            <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2>Archive for <?php the_time('Y'); ?></h2>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2>Author Archive</h2>
            <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2>Blog Archives</h2>
            <?php } ?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <p><?php the_time('l, F jS, Y') ?></p>
                <?php the_content() ?>
  
                <div id="postmeta">
                    <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
                    <p>Category <?php the_category(', ') ?> | Tags: <?php the_tags('Tags: ', ', ', ', '); ?></p>
                    <!--
                    Social Networking Links if you're interested. Please note, that the following networking links contain invalid XHTML.
                    If you want more social network links, check out this URL: http://brianp.covie.ws/Zp0
                    -->
                    <p>Social Networks: <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>">Facebook</a>, <a href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>">Twitter</a>,  <a href="http://www.google.com/bookmarks/mark?op=edit&bkmk=<?php the_permalink(); ?>&title=<?php the_title(); ?>&annotation=<?php the_excerpt(); ?>">Google Bookmarks</a>, <a href="http://delicious.com/post?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&notes=<?php the_excerpt(); ?>">del.icio.us</a>, <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>">StumbleUpon</a>, <a href="http://digg.com/submit?phase=2&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&bodytext=<?php the_excerpt(); ?>">Digg</a>, <a href="http://posterous.com/share?linkto=<?php the_permalink(); ?>&title=<?php the_title(); ?>&selection=<?php the_excerpt(); ?>">Reddit</a>, <a href="http://posterous.com/share?linkto=<?php the_permalink(); ?>&title=<?php the_title(); ?>&selection=<?php the_excerpt(); ?>">Posterous</a>.</p>
                    <?php edit_post_link('Edit', '', ' | '); ?>
                </div><!-- end .postmeta -->
            </div><!-- end #post -->

        <?php endwhile; ?>

        <div id="postnavigation">
            <p><?php next_posts_link('&laquo; Older Entries') ?> <?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
        </div> <!-- end #postnavigation -->
 
    <?php else : ?>

        <h2>Not Found</h2>
        <p>Try using the search form below</p>
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>

    <?php endif; ?>
</div><!-- end #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>