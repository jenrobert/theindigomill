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
					<?php if ( function_exists( 'jetpack_social_menu' ) ) : ?>
						<div class="site-social">
							<?php jetpack_social_menu(); ?>
						</div>
					<?php endif; ?>
					<p class="copyright">&copy; <?php echo date('Y') . esc_html__( ' The Indigo Mill', 'theindigomill' ); ?></p>
				</footer><!-- #colophon -->

			</div><!-- .col-lg-12 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
