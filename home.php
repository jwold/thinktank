<?php get_header(); ?>
			<?php get_sidebar('top'); ?>
			<?php
			if (have_posts()) {
				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_' . (theme_is_home() ? 'home_' : '') . 'top_posts_navigation')) {
					theme_page_navigation();
				}
				?>
				
				<div class="home-posts">
				
					<div class="post-section">
						<h2 class="cat-title">The Latest</h2>	
						<?php query_posts('cat=3'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php the_meta(); ?>
						<?php the_excerpt(); ?>
						<span class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></span>
						<?php endwhile; endif; ?>
					</div>
								
					<div class="post-section">		
						<h2 class="cat-title">Meanwhile</h2>
						<?php query_posts('cat=4'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php the_excerpt(); ?> 
						<span class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></span>
						<?php endwhile; endif; ?>
					</div>
				
				</div>
				
				<?php
				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_bottom_posts_navigation')) {
					theme_page_navigation();
				}
			} else {
				theme_404_content();
			}
			?>
			<?php get_sidebar('bottom'); ?>
<?php get_footer(); ?>