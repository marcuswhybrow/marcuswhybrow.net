<?php get_header(); ?>

    <div id="content-wrapper">

        <div id="content" class="container">
            <h1>Results For <span class="small">"<?php the_search_query() ?>"</span></h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <?php the_content(__('Read more')) ?>
                </div><!-- end .post -->
            <?php endwhile; else: ?>
                <h2>No Results</h2>
                <p>Please feel free try again!<p/>
                <p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>
            <?php endif; ?>

            <div class="postnavigation">
                <p><?php next_posts_link('&laquo; Older Entries') ?> | <?php previous_posts_link('Newer Entries &raquo;') ?></p>
            </div><!-- end .postnavigation -->
        </div><!-- end #content -->
    
    </div><!-- end #content-wrapper -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
