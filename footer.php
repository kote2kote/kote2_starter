<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kote2_starter
 */

?>

		<?php echo esc_url( __( 'https://wordpress.org/', 'kote2_starter' ) ); ?>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'kote2_starter' ), 'WordPress' );
				?>


				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kote2_starter' ), 'kote2_starter', '<a href="http://kote2.tokyo">kote2</a>' );
				?>


<?php wp_footer(); ?>

</body>
</html>
