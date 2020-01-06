<?php
/**
 * The template for displaying the footer.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */
?>

<footer id="colophon" class="site-footer cf">
	
	<?php get_sidebar( 'footer' ); ?>

	<div id="site-info">
		<ul class="credit" role="contentinfo">
		<?php if ( get_theme_mod( 'neubau_credit' ) ) : ?>
			<li><?php echo wp_kses_post( get_theme_mod( 'neubau_credit' ) ); ?></li>
		<?php else : ?>
			<li class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo(); ?></a></li>
			<li class="wp-credit"><?php esc_html_e('Powered by', 'neubau') ?> <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'neubau' ) ); ?>" ><?php esc_html_e( 'WordPress', 'neubau' ); ?></a></li>
			<li class="theme-author"><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'neubau' ), 'Neubau', '<a href="http://www.elmastudio.de/en/" rel="designer">Elmastudio</a>' ); ?></li>
		<?php endif; ?>
		</ul><!-- end .credit -->
	</div><!-- end #site-info -->
</footer><!-- end #colophon -->

</div><!-- end .main-container -->
<?php wp_footer(); ?>

</body>
</html>
