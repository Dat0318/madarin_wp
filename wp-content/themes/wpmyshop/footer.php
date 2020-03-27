<?php
/**
 * The template for displaying the footer
 *
 * 
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
				<?php
					/**
					 * Fires before the wpmyshop footer text for footer customization.
					 *
					 */
					do_action( 'wpmyshop_credits' );
				?>
				<span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpmyshop' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'wpmyshop' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
