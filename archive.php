<?php get_header(); ?>
    
    <div id="content-wrapper">

        <div id="content" class="container">
            <?php is_tag(); ?>
            <?php if (have_posts()) : ?>
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h2><span><?php single_cat_title(); ?></span> Posts</h2>
                    <?php $picker = 'category_name=' . single_cat_title('', false); ?>
                <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h2>Posts Tagged <span>&#8216;<?php single_tag_title(); ?>&#8217;</span></h2>
                    <?php $picker = 'tag=' . single_tag_title('', false); ?>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h2>Archive for <span><?php the_time('F jS, Y'); ?></span></h2>
                    <?php $picker = 'year=' . get_the_time('Y') . '&monthnum=' . get_the_time('n') . '&day=' . get_the_time('j'); ?>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h2>Archive for <span><?php the_time('F, Y'); ?></span></h2>
                    <?php $picker = 'year=' . get_the_time('Y') . '&monthnum=' . get_the_time('n'); ?>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h2>Archive for <span><?php the_time('Y'); ?></span></h2>
                    <?php $picker = 'year=' . get_the_time('Y'); ?>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <?php the_post(); $author = get_userdata($post->post_author); ?>
                    <h2>All Posts by <span><?php echo $author->first_name; ?></span></h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h2>Blog Archives</h2>
                <?php } ?>

                <ul class="posts">
                <?php
                    $thisPost = ''; $lastPost = '';
                    foreach(get_posts('numberposts=-1&orderby=post_date&order=DESC&' . $picker) as $post) :
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
                <?php endforeach; ?>
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
    </div><!-- end #content-wrapper -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
