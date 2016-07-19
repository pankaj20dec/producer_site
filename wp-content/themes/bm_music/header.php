<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png" type="image/x-icon">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="home-intro">
		<div class="">
			<?php 
			$page_id = 4;  //Page ID
			$page_data = get_post( $page_id ); 
			$title = $page_data->post_title; 
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($page_data), 'thumbnail_size' );
			$url = $src[0];
			?>
			<div class="wheight home-background flex-container" style="background:url(<?php echo $url;?>);">
				<div class="music-name">
					<h1> <?php echo $title; ?></h1>
				</div>
				<div class="scroll-down">
					<a href="#news">
						<img src="<?php echo get_template_directory_uri();?>/images/scroll-next.png" alt="Scroll next"> 
						<p>Scroll</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<header id="header">
		<nav>
			<?php wp_nav_menu( array('theme_location' => 'primary') );?>
		</nav>
	</header>
	<div class="mobile-menu">
		<a href="javascript:void(0);">
			<span class="hamberger">&nbsp;</span> <span class="menu-text">Menu</span>
		</a>
	</div>
	<div id="menu-container">
		<a href="javascript:void(0);" class="close">&times;</a>
		<?php wp_nav_menu( array('theme_location' => 'primary') );?>
	</div>
	