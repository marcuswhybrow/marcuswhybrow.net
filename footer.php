<div id="footer" class="container">
    <hr>

    <section class="archives">
        <h5>Archives</h5>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </section>

    <p>
        <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> and <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a>
    </p>
    <p>
        <?php bloginfo('name'); ?> is proudly powered by <a href="http://wordpress.org/">WordPress.org</a> <!-- It is recommended that you leave this link. Links such as these are Wordpress' main form of advertising. --> and
        <a href="http://whiteboardframework.com">whiteboard</a> <!-- You may remove this link. Though, I would appreciate it if you left it or at least gave me a link somewhere... ;-) -->
    </p>
 </div><!-- end #footer -->
</div><!-- end #container -->

<?php wp_footer(); ?>
</body></html>
