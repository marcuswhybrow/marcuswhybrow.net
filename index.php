<?php get_header(); ?>

<div id="content" class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post">
            <div class="post-date"><?php the_time('j'); ?><span><?php the_time('S'); ?></span> <?php the_time('M'); ?><br><?php the_time('Y') ?></div>
            <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>

            <?php the_content(__('Read more'));?>

            <div class="postmeta">
                <p><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
            </div><!-- end .postmeta -->
            <hr>
        </div><!-- end .post -->

    <?php endwhile; else: ?>
        <p>
            <strong>There has been a glitch in the Matrix.</strong>
            <br>
            There is nothing to see here.
        </p>
        <p>Please try somewhere else.</p>
    <?php endif; ?>

    <div class="postnavigation">
        <p><?php next_posts_link('&laquo; Older Entries') ?><?php previous_posts_link(' | Newer Entries &raquo;') ?></p>
    </div> <!-- end .postnavigation -->

</div> <!-- end #content -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
