<?php get_header(); ?>
    
    <div id="content-wrapper">

        <div id="content" class="container">
            <article class="post" id="post-<?php the_ID(); ?>">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <header class="post-header">
                        <div class="post-date"><?php the_time('j'); ?><span><?php the_time('S'); ?></span> <?php the_time('M'); ?><br><?php the_time('Y') ?></div>
                        <h1><a href="<?php echo get_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                    </header>

                    <?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

                    <footer class="author-bio">
                        <p class="small"><?php the_author_description(); ?></p>

                        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                        <div id="postmeta">
                            <p class="small">Categories <?php the_category(', ') ?> | Tags: <?php the_tags(' ', ', ', ' '); ?> | <?php comments_rss_link('RSS 2.0'); ?></p>
                        </div><!-- end #postmeta -->

                        <hr>

                        <?php comments_template(); ?>
                    </footer>
            
                <?php endwhile; else: ?>

                    <p>
                        <strong>There has been a glitch in the Matrix.</strong>
                        <br>
                        There is nothing to see here. No matter how many times you click 'refresh.'
                    </p>
                    <p>Please try somewhere else.</p>
                <?php endif; ?>
        
            </article><!-- end .post & #post"#" -->
        </div><!-- end #content -->
    </div><!-- end #content-wrapper -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
