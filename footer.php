    <div id="footer-wrapper">
        <div id="footer" class="container">

            <!-- <section class="archives">
                <h5>Archives</h5>
                <ul>
<?php wp_get_archives('type=monthly&format=custom&before=            <li>&after=</li>'); ?>
                </ul>
            </section> -->

            <p>
                <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>
            </p>

            <p id="credits" class="small">
                All this is runs on <a href="http://wordpress.org/">WordPress</a>
                and the design was built using
                <a href="http://whiteboardframework.com">whiteboard</a>
            </p>
        </div><!-- end #footer -->
    </div><!-- end #footer-wrapper -->
</div><!-- end #container -->

<!-- start Wordpress footer -->
<?php wp_footer(); ?>
<!-- end Wordpress footer -->

</body></html>
