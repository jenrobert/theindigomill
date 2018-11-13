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
	<div id="site-header-cart" class="site-header-cart">
		<div class="site-header-cart-wrap <?php echo esc_attr( $class ); ?>">
			<div class="site-header-cart-trigger">
				<?php olsen_woocommerce_cart_link(); ?>
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
