<?php get_header(); ?>

		<div class="page2col">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<?php endwhile; endif; ?>
		
		<!-- Start of edit_post_link -->
		
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
		<!-- End of edit_post_link -->
	
		</div> <!-- END .page2col -->
		
	<?php get_sidebar(); ?>
	
	<?php get_footer(); ?>