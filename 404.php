<?php get_header(); ?>

    <div id="content-wrapper">

        <div id="content" class="container">
            <h1>Error 404 - Not Found<br /></h1>
            <p>
                <strong>I'm very sorry, but that page doesn't exist or has been moved.</strong>
                <br>
                Please make sure you have the right URL.
            </p>
            <p>If you still can't find what you're looking for, try using the search form below.</p>

            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
            
            </div><!-- end #searchform -->
        </div><!-- end #content -->
    </div><!-- end #content-wrapper -->

<?php /* get_sidebar(); */ ?>
<?php get_footer(); ?>
