<?php
/**
 * The template for displaying the theme's header.
 *
 * @package Olsen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<header id="masthead" class="site-header" role="banner">

					<?php if ( function_exists( 'olsen_woocommerce_header_cart' ) ) {
						theindigomill_woocommerce_header_cart();
					} ?>

					<div class="site-branding textcenter-xs">

						<?php if ( has_custom_logo() ) {
							the_custom_logo();
						} ?>

						<?php if ( is_front_page() && is_home() ) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>

						<?php $description = get_bloginfo( 'description', 'display' ); ?>
						<?php if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>

					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'olsen' ); ?></button>
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) ); ?>
					</nav><!-- #site-navigation -->

				</header><!-- #masthead -->

				<?php if ( olsen_has_featured_posts( 1 ) && is_front_page() ) : ?>
					<div class="featured-posts-wrapper">
						<div class="featured-posts flexslider">
							<ul class="slides">
								<?php
									$featured_posts = olsen_get_featured_posts();
									foreach ( $featured_posts as $post ) :
										setup_postdata( $post );
										get_template_part( 'template-parts/content', 'featured' );
									endforeach;
									wp_reset_postdata();
								?>
							</ul>
						</div>
					</div>
				<?php endif; ?>

				<div id="content" class="site-content">
					<div class="row">
