<?php theme_print_sidebar('header-widget-area'); ?>
    

    <div class="art-shapes">
        
            </div>
<!--
<?php if(theme_get_option('theme_header_show_headline')): ?>
	<?php $headline = theme_get_option('theme_'.(is_home()?'posts':'single').'_headline_tag'); ?>
	<<?php echo $headline; ?> class="art-headline">
    <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>

</<?php echo $headline; ?>>
<?php endif; ?>
-->

<?php if (theme_get_option('theme_use_default_menu')) { wp_nav_menu( array('theme_location' => 'primary-menu') );} else { ?>
	<div class="nav-wrap">
	<nav class="art-nav">
    <?php
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_menu_source'),
			'depth' => theme_get_option('theme_menu_depth'),
			'menu' => 'primary-menu',
			'class' => 'art-hmenu'
		)
	);
	get_sidebar('nav'); 
?> 
    </nav>
    </div>
    <?php } ?>

                    
