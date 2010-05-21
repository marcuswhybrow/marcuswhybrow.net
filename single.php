<?php get_header(); ?>
	
	<div class="page2col">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="post-date-wrapper">
				<div class="post-date"><?php the_time('M jS') ?><br /><?php the_time('Y') ?></div>
			</div>
			<h2><?php the_title(); ?></h2>

			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

		</div>
		
		<!-- Commnets -->

		<?php comments_template(); ?>
		
		<!-- END Comments -->
		
		<ul>
			<li><?php next_post_link('&laquo; Older Entries') ?></li>
			<li><?php previous_post_link('Newer Entries &raquo;') ?></li>
		</ul>

		<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>
	
	</div> <!-- END #single-post -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
