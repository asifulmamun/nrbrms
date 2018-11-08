<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NRB_Rights_Movements
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- @Google Fonts
     * font-family: 'Roboto', sans-serif;
     * font-family: 'Hind Siliguri', sans-serif;
	 -->
	<link href="https://fonts.googleapis.com/css?family=Hind+Siliguri|Roboto+Slab" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/style.css">
</head>
<body <?php body_class(); ?>>

<!-- header section -->
<section id="main_header">
	<header id="header">
		<div class="main_logo">
			<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$nrbrms_description = get_bloginfo( 'description', 'display' );
				if ( $nrbrms_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $nrbrms_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>
		<div class="main_menu">
			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav>
		</div>
	</header>
</section>

<!-- site main content -->
<div id="page" class="site">
	<div id="content" class="site-content">