<?php
/**
 *  The Indigo Mill theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */
/**
 * Enqueue scripts and styles.
 */
function theindigomill_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'theindigomill-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), 1.0, true );
}
add_action( 'wp_enqueue_scripts', 'theindigomill_styles' );

/**
 * Child Theme Setup
 */
function theindigomill_theme_setup() {
	// Add additional sizes for Post Thumbnails on posts and pages.
	add_image_size( 'page-thumbnail', 1040, 350, true );

	// Register new menu to use wp_nav_menu() in the footer.
	register_nav_menus( array(
		'footer-menu' => esc_html__( 'Footer Menu', 'theindigomill' ),
	) );
}
add_action( 'after_setup_theme', 'theindigomill_theme_setup', 11 );

/**
 * Parent theme overrides
 */

/**
 * Display Header Cart.
 *
 * Renamed for child theme
 *
 * @return void
 */
function theindigomill_woocommerce_header_cart() {
	if ( is_cart() || is_checkout() || is_checkout_pay_page() ) {
		$class = 'current-menu-item';
	} else {
		$class = '';
	}
	?>
	<div id="site-header-top-bar" class="site-header-top-bar">
		<?php if ( function_exists( 'jetpack_social_menu' ) ) : ?>
			<div class="site-social">
				<?php jetpack_social_menu(); ?>
			</div>
		<?php endif; ?>

		<div class="site-header-cart-wrap <?php echo esc_attr( $class ); ?>">
			<div class="site-header-cart-trigger">
				<?php olsen_woocommerce_cart_link(); ?>
				<a class="account" href="<?php echo esc_url( home_url() . '/my-account' ); ?>"><?php echo esc_html__( 'My Account', 'theindigomill' ); ?></a>
			</div>

			<div class="site-header-cart-items">
				<?php
					$instance = array(
						'title' => '',
					);

					the_widget( 'WC_Widget_Cart', $instance );
				?>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Displays an optional post thumbnail.
 */
function olsen_post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
		?>
		<div class="entry-featured">
			<?php the_post_thumbnail( 'page-thumbnail' ); ?>
		</div><!-- .post-thumbnail -->
		<?php
	else :
		?>
		<a class="entry-featured" href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'post-thumbnail', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
		</a>
		<?php
	endif;
}
