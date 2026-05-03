<?php
/**
 * The header template.
 *
 * @package Joshs_WriteUp
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'joshs-writeup' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-inner">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$joshs_writeup_description = get_bloginfo( 'description', 'display' );
					if ( $joshs_writeup_description || is_customize_preview() ) :
					?>
						<p class="site-description"><?php echo $joshs_writeup_description; ?></p>
					<?php endif; ?>
				<?php endif; ?>
			</div>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<span class="hamburger"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'joshs-writeup' ); ?></span>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'fallback_cb'    => false,
				) );
				?>
			</nav>

			<div class="header-search">
				<button class="header-search-toggle" aria-expanded="false">
					<span class="search-icon"></span>
					<span class="screen-reader-text"><?php esc_html_e( 'Search', 'joshs-writeup' ); ?></span>
				</button>
				<div class="header-search-form">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
