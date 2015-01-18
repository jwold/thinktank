<?php get_header(); ?>
			<?php get_sidebar('top'); ?>
			<?php
			if (have_posts()) {
				/* Display navigation to next/previous pages when applicable */
				if (theme_get_option('theme_' . (theme_is_home() ? 'home_' : '') . 'top_posts_navigation')) {
					theme_page_navigation();
				}
				?>
				
				<!--<?php
				query_posts('cat=3');
				while (have_posts()) : the_post();
				the_title( '<h1>', '</h1>' );
				the_excerpt();
				endwhile;
				?>-->
				
				<?php query_posts('cat=3'); ?>
				<!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_title(); ?>
				<?php the_excerpt(); ?>
				<?php endwhile; endif; ?>-->
				
				<?php
				for ($i = 0; $i < $wp_query->post_count; $i++) {
					theme_get_next_post();
					the_excerpt();
				}
				?>
				
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