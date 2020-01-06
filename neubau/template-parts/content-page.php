<?php
/**
 * The template used for displaying page content.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>
	
	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required()  &&  ! is_page_template( 'page-templates/front-page.php' )  ) : ?>
		<div class="page-thumbnail" style="background-image: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>);">
		</div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- end .entry-header -->
	<?php endif; ?>

	<div class="entry-content fadethis">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'neubau' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
		<?php edit_post_link( esc_html__( 'Edit Page', 'neubau' ), '<div class="edit-link cf">', '</div>' ); ?>
	<?php endif; ?>
</article><!-- #post-## -->
