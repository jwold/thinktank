<?php global $wp_locale;
if (isset($wp_locale)) {
	$wp_locale->text_direction = 'ltr';
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset') ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<!-- Created by Artisteer v4.3.0.60745 -->
<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width" />
<!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php
remove_action('wp_head', 'wp_generator');
if (is_singular() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
}
wp_head();
?>
<link href="http://fonts.googleapis.com/css?family=Hammersmith+One" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>

<div id="art-main">

    <div class="art-sheet clearfix">

	<?php if(theme_has_layout_part("header")) : ?>
	<header class="art-header<?php echo (theme_get_option('theme_header_clickable') ? ' clickable' : ''); ?>">
		<a href="<?php echo get_option('home'); ?>/">
			<img class="art-headline" src="<?php bloginfo('template_directory'); ?>/images/logo.png">
		</a>
		<?php get_sidebar('header'); ?>
	</header>
	<?php endif; ?>

<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <?php get_sidebar(); ?>
                        <div class="art-layout-cell art-content">
