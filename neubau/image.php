<?php
/**
 * The template for displaying image attachments.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0.1
 */

// Retrieve attachment metadata.
$metadata = wp_get_attachment_metadata();

get_header();
?>

	<div id="primary" class="site-content cf" role="main">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></a></h1>
			<div class="entry-meta">
				<div class="entry-date">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
				</div><!-- end .entry-date -->
				<?php if ( comments_open() ) : ?>
				<div class="entry-comments">
					<?php comments_popup_link( '<span class="leave-reply">' . esc_html__( 'Leave a comment', 'neubau' ) . '</span>', esc_html__( 'comment 1', 'neubau' ), esc_html__( 'comments %', 'neubau' ) ); ?>
				</div><!-- end .entry-comments -->
				<?php endif; // comments_open() ?>
				<?php edit_post_link( esc_html__( 'Edit', 'neubau' ), '<div class="entry-edit">', '</div>' ); ?>
			</div><!-- end .entry-meta -->
		</header><!--end .entry-header -->

		<div class="entry-wrap">
		<div class="entry-content">
			<div class="attachment">
				<?php echo wp_get_attachment_image( get_the_ID(), $image_size ); ?>
				<?php if ( ! empty( $post->post_excerpt ) ) : ?>
					<div class="entry-caption">
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>
			</div><!-- .attachment -->
		</div><!-- .entry-content -->
	</div><!-- end .entry-wrap -->

	</article><!-- #post-<?php the_ID(); ?> -->

	<?php
	// If comments are open or we have at least one comment, load up the comment template
		if ( comments_open() || '0' != get_comments_number() )
		comments_template();
	?>

	<div class="nav-wrap cf">
		<nav id="nav-single" class="cf">
			<div class="nav-next"><?php next_image_link( '%link', ( '<span>' . esc_html__( 'Next Image', 'neubau' ) . '</span>' ) ); ?></div>
			<div class="nav-previous"><?php previous_image_link( '%link', ( '<span>' . esc_html__( 'Previous Image', 'neubau' ) . '</span>' ) ); ?></div>
		</nav><!-- #nav-single -->
	</div><!-- end .nav-wrap -->

	</div><!-- end #primary -->

<?php get_footer(); ?>