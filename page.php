<?php get_header(); ?>

<div id="content" class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <?php the_content(__('Read more'));?>	
    <?php endwhile; else: ?>
        <p>
            <strong>There has been a glitch in the Matrix.</strong>
            <br>
            There is nothing to see here.
        </p>
        <p>Please try somewhere else.</p>
    <?php endif; ?>
</div><!-- end #content-->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
