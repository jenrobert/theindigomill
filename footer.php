<?php
/**
 * The template for displaying the theme's footer.
 *
 * @package Olsen
 */

?>

					</div><!-- .row -->
				</div><!-- #content -->

				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<div class="widget-area-footer">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php endif; ?>

				<footer id="colophon" class="site-footer textcenter-xs" role="contentinfo">
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'menu_id'        => 'footer-menu',
					) ); ?>

					<p class="copyright">&copy; <?php echo date('Y') . esc_html__( ' The Indigo Mill', 'theindigomill' ); ?></p>
					<p class="photography-credit"><?php echo esc_html__( 'Photography by ', 'theindigomill' ); ?><a href="<?php echo esc_url( 'https://www.markiewalden.com/' ); ?>"><?php echo esc_html__( 'Markie Walden', 'theindigomill' ); ?></a></p>

					<?php if ( function_exists( 'jetpack_social_menu' ) ) : ?>
						<div class="site-social">
							<?php jetpack_social_menu(); ?>
						</div>
					<?php endif; ?>

				</footer><!-- #colophon -->

			</div><!-- .col-lg-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
