<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kote2_starter
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>



	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>

			<?php
			$kote2_starter_comment_count = get_comments_number();
			if ( '1' === $kote2_starter_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'kote2_starter' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $kote2_starter_comment_count, 'comments title', 'kote2_starter' ) ),
					number_format_i18n( $kote2_starter_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>


		<?php the_comments_navigation(); ?>


			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>


		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<?php esc_html_e( 'Comments are closed.', 'kote2_starter' ); ?>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->
