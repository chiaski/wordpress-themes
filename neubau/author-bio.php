<?php
/**
 * The template for displaying Author bios
 *
 * @subpackage Neubau
 * @since Neubau 1.0
  * @version 1.0
 */
?>

<div class="authorbox cf">
	<div class="author-pic">
		<?php
		$author_bio_avatar_size = apply_filters( 'neubau_author_bio_avatar_size', 140 );
		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-pic -->
	<div class="author-heading">
		<h3 class="author-title"><span><?php esc_html_e( 'by', 'neubau' ); ?></span><?php printf( "<a href='" .  esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . "' rel='author'>" . get_the_author() . "</a>" ); ?></h3>
	</div><!-- end .author-heading -->
	<p class="author-bio"><?php the_author_meta( 'description' ); ?></p>
</div><!-- end .authorbox -->
