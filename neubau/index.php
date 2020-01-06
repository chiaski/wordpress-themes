<?php
/**
 * The main template file.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content cf" role="main">

		<div id="post-container" class="cf">
			<!-- .grid-sizer empty element, only used for element sizing -->
			<div class="grid-sizer"></div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('content' ); ?>

			<?php endwhile; // end of the loop. ?>
		</div><!-- end .post-container -->

		<?php the_posts_pagination( array(
			'next_text' => '<span class="meta-nav">' . __( 'Older', 'neubau' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Older Posts', 'neubau' ) . '</span> ',
			'prev_text' => '<span class="meta-nav">' . __( 'Newer', 'neubau' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Newer Posts', 'neubau' ) . '</span> ',
			'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'neubau' ) . ' </span>',
		) ); ?>

	</div><!-- end #primary -->

<?php get_footer(); ?>
