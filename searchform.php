				<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
					<div class="romElem">
						<label class="hidden" for="s"><?php _e('Search for:'); ?></label>
						<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
					</div>
					<div class="rowElem">
						<input type="submit" id="searchsubmit" value="Search" />
					</div>
				</form>
			