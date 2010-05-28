<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<div id="content-wrapper">
    <div id="content" class="container">
        <div class="container">
            <div class="column span-9 append-1">
                <h2 class="no-top-margin">About Me</h2>
                <p class="small">
                    I am a web developer, musician, photographer and Nottingham University Computer Science student. I always have a project on the go, and love creating web applications using the fantastic <a href="http://djangoproject.com/">Django</a> framework.
                </p>
            </div>
            <div class="span-6 last">
                <h2 class="no-top-margin">My Latest Posts</h2>
                <ul id="quick-look" class="small">
                    <?php $posts = get_posts('numberposts=3'); ?>
                    <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div><!-- end .container -->
        <div class="container">
            <div class="column span-9 append-1">
                <h2 id="flickr-logo" class="no-top-margin"><a href="http://flickr.com/marcuswhybrow/">Flickr Feed</a></h2>
                <ul id="flickr">
                    
                </ul>
            </div>
            <div class="span-6 last">
                <h2 id="twitter-logo" class="no-top-margin"><a href="http://twitter.com/marcuswhybrow/">Twitter</a></h2>
                <div id="tweets"></div>
                <noscript>
                    <p>
                        Requires Javascript
                    </p>
                </noscript>
            </div>
        </div><!-- end .container -->
    </div><!-- end #content -->
</div><!-- end #content-wrapper -->

<?php get_footer(); ?>