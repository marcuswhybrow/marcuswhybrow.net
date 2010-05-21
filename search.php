<?php get_header(); ?>
	
	<div id="search" class="page2col">
	

		<?php if (have_posts()) : ?>
	
			<h2>Search Results</h2>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<div class="post">
					<?php if(is_single()) { ?>
					<div class="post-date" title="<?php the_time('l, F jS, Y') ?>"><?php the_time('F jS') ?><br /><?php the_time('Y') ?></div>
					<?php } ?>
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content('Read the rest of this entry &raquo;'); ?>
					<div class="post-buttons">
						<div class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></div>
						<div class="category"><?php the_category(', ') ?></div>
						<?php if(comments_open()) { ?>
						<div class="comments"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
						<?php } else { ?>
						<div class="comments disabled">Comments Disabled</div>
						<?php } ?>
						<?php edit_post_link('Edit', '', ''); ?>
					</div>
				</div>
	
			<?php endwhile; ?>
	
			<ul>
				<li><?php next_post_link('&laquo; Older Entries') ?></li>
				<li><?php previous_post_link('Newer Entries &raquo;') ?></li>
			</ul>
	
		<?php else : ?>
	
			<h2>No posts found. Try a different search?</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
		<?php endif; ?>
		
	</div> <!-- END .page2col -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>