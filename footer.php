    <div id="footer-wrapper">
        <div id="footer" class="container">
            <hr>

            <section class="archives">
                <h5>Archives</h5>
                <ul>
<?php wp_get_archives('type=monthly&format=custom&before=            <li>&after=</li>'); ?>
                </ul>
            </section>

            <p>
                <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>
            </p>

            <p class="small">
                <?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress.org</a>
                and
                <a href="http://whiteboardframework.com">whiteboard</a>
            </p>
        </div><!-- end #footer -->
    </div><!-- end #footer-wrapper -->
</div><!-- end #container -->

<!-- start Wordpress footer -->
<?php wp_footer(); ?>
<!-- end Wordpress footer -->

</body></html>
