<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kote2_starter
 */

get_header();
?>

<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kote2_starter' ); ?>

<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kote2_starter' ); ?>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>


<?php esc_html_e( 'Most Used Categories', 'kote2_starter' ); ?>

							<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
							?>

>

					<?php
					/* translators: %1$s: smiley */
					$kote2_starter_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'kote2_starter' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$kote2_starter_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>


<?php
get_footer();
