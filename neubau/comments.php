<?php
/**
 * The template for displaying Comments.
 *
 * @package Neubau
 * @since Neubau 1.0
 * @version 1.0
 */

 /*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

	<div id="comments" class="comments-area cf">

	<?php if ( have_comments() ) : ?>

	<h3 class="comments-title">
		<?php
			printf( _n( 'Comment (1)', 'Comments (%1$s)', get_comments_number(), 'neubau' ),
				number_format_i18n( get_comments_number() ) );
		?>
	</h3>

	<ol class="commentlist">
		<?php
			wp_list_comments( array( 'callback' => 'neubau_comment' ) );
		?>
	</ol><!-- end .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="nav-comments">
			<div class="nav-previous"><?php previous_comments_link( ( '<span>' . __( 'Older Comments', 'neubau' ) . '</span>' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( ( '<span>' . __( 'Newer Comments', 'neubau' ) . '</span>' ) ); ?></div>
		</nav><!-- end #comment-nav -->
		<?php endif; // check for comment navigation ?>

	<?php
		// If comments are closed and there are no comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'neubau' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php $comment_args = array(

		'fields' => apply_filters( 'comment_form_default_fields', array(
		'author' => '<p class="comment-form-author">' . '<label for="author">' . esc_html__( 'Name', 'neubau' ) . '</label><input id="author" name="author" type="text" placeholder="' . esc_html__( 'Name', 'neubau' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true"/></p>',   
		'email'  => '<p class="comment-form-email">' . '<label for="email">' . esc_html__( 'Email', 'neubau' ) . '</label> ' . ( $req ? '<span>*</span>' : '' ) . '<input id="email" name="email" type="text" placeholder="' . esc_html__( 'Email', 'neubau' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true"/>'.'</p>',
		'url'    => '<p class="comment-form-url"><label for="url">' . esc_html__( 'Website', 'neubau' ) . '</label>' . '<input id="url" name="url" type="text" placeholder="' . esc_html__( 'Website', 'neubau' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
    'comment_notes_after' => '',
    ) )
);

comment_form($comment_args); ?>

	</div><!-- #comments .comments-area -->
