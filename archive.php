<?php get_header(); ?>

		<div id="archive" class="page2col">

			<?php if (have_posts()) : ?>
	
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			<h2>Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h2>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2>Archive for <?php the_time('F, Y'); ?></h2>
			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2>Archive for <?php the_time('Y'); ?></h2>
			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h2>Author Archive</h2>
			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2>Blog Archives</h2>
			<?php } ?>
	
			<?php while (have_posts()) : the_post(); ?>
					<div class="post-date" title="<?php the_time('l, M jS, Y') ?>"><?php the_time('F jS') ?><br /><?php the_time('Y') ?></div>
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php the_content() ?>
					<div class="post-buttons">
						<?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in 
						<div class="category"><?php the_category(', ') ?></div>
						<div class="comments"><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
						<?php edit_post_link('Edit', '', ''); ?>
					</div>
			<?php endwhile; ?>
	
			<ul>
				<li><?php next_posts_link('&laquo; Older Entries') ?></li>
				<li><?php previous_posts_link('Newer Entries &raquo;') ?></li>
			</ul>

			<?php else : ?>
	
			<h2>Not Found</h2>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
			<?php endif; ?>
			
		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
