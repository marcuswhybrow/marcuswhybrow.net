<?php get_header(); ?>

<div id="content" class="container">
    <div class="post" id="post-<?php the_ID(); ?>">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <p class="post-date small">Written on <?php the_time('F j, Y'); ?> at <?php the_time() ?>, by <?php the_author() ?></p>
            <h1><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

            <hr>

            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

            <div id="postmeta">
                <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                <p>Categories <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ', ', ' '); ?></p>
                <!--
                Social Networking Links if you're interested. Please note, that the following networking links contain invalid XHTML.
                If you want more social network links, check out this URL: http://brianp.covie.ws/Zp0
                -->
                <p>Social Networks: <a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>">Facebook</a>, <a href="http://twitter.com/home?status=<?php the_title(); ?> - <?php the_permalink(); ?>">Twitter</a>,  <a href="http://www.google.com/bookmarks/mark?op=edit&bkmk=<?php the_permalink(); ?>&title=<?php the_title(); ?>&annotation=<?php the_excerpt(); ?>">Google Bookmarks</a>, <a href="http://delicious.com/post?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&notes=<?php the_excerpt(); ?>">del.icio.us</a>, <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>">StumbleUpon</a>, <a href="http://digg.com/submit?phase=2&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&bodytext=<?php the_excerpt(); ?>">Digg</a>, <a href="http://posterous.com/share?linkto=<?php the_permalink(); ?>&title=<?php the_title(); ?>&selection=<?php the_excerpt(); ?>">Reddit</a>, <a href="http://posterous.com/share?linkto=<?php the_permalink(); ?>&title=<?php the_title(); ?>&selection=<?php the_excerpt(); ?>">Posterous</a>.</p>
                <p>You can follow any follow up comments to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.</p>
            </div><!-- end #postmeta -->

            <hr>

            <?php comments_template(); ?>
            
        <?php endwhile; else: ?>

            <p>
                <strong>There has been a glitch in the Matrix.</strong>
                <br>
                There is nothing to see here. No matter how many times you click 'refresh.'
            </p>
            <p>Please try somewhere else.</p>
        <?php endif; ?>
        
    </div><!-- end .post & #post"#" -->
</div><!-- end #content -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
