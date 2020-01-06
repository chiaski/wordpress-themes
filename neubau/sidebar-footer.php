<?php
/**
 * The template for the footer widget areas
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' )  && ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="footer-widgets" class="footer-widgets cf" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div class="footer-one widget-area">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div class="footer-two widget-area">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div class="footer-three widget-area">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
