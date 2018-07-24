<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kote2_starter
 */

?>

<?php the_ID(); ?><?php post_class(); ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>


	<?php kote2_starter_post_thumbnail(); ?>


		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kote2_starter' ),
			'after'  => '</div>',
		) );
		?>


	<?php if ( get_edit_post_link() ) : ?>

			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'kote2_starter' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
	<?php endif; ?>
<?php the_ID(); ?>
