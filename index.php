<?php get_header(); ?>

	<div id="blog">
	
		<h2>Blog</h2>

	<?php if (have_posts()) : ?>
	
		<!-- START posts -->

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<div id="test" class="post-date-wrapper">
					<div class="post-date" title="<?php the_time('l, F jS, Y') ?>"><?php the_time('M jS') ?><br /><?php the_time('Y') ?></div>
				</div>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<!--<p><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>-->
			</div>

		<?php endwhile; ?>
		
		<!-- END posts -->
		
		<ul>
			<li><?php next_posts_link('&laquo; Older Entries') ?></li>
			<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
		</ul>
		
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div> <!-- END #blog -->
	
	<div id="projects">
	
		<a href="http://cs.marcuswhybrow.net/"><img src="http://marcuswhybrow.net/wp-content/themes/MarcusWhybrowTheme/style/images/cs-screen.png" alt="WPS Coursework Screen" class="right" /></a>
		
		<h2>Projects</h2>
		
		<h3>Computer Science Porject</h3>
		<p>This new project is going to make sure that all the information I need to pass the exam for each of my modules is documented. Since I cannot revise, I shall instead write it all down in an educational fasion.</p>
	
	</div> <!-- END #projects -->
	
	<div id="twitter">
		
		<div id="profile">
			<?php echo get_avatar( 'marcus@whybrow.org.uk', '250' ); ?>
		</div>
		
		<?php if (is_user_logged_in()) { ?>
		<a href="twitter.com/marcuswhybrow">TWEET</a>
		<?php } ?>
		
		<div id="twitter_div">
			<h2>Twitter Updates</h2>
			<ul id="twitter_update_list"></ul>
		</div>
		
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/marcuswhybrow.json?callback=twitterCallback2&amp;count=5"></script>
	
	</div> <!-- END #twitter -->

<?php get_footer(); ?>