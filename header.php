<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kote2_starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php esc_html_e( 'Skip to content', 'kote2_starter' ); ?>

			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<?php echo esc_url( home_url( '/' ) ); ?><?php bloginfo( 'name' ); ?>
				<?php
			else :
				?>
				<?php echo esc_url( home_url( '/' ) ); ?><?php bloginfo( 'name' ); ?>
				<?php
			endif;
			$kote2_starter_description = get_bloginfo( 'description', 'display' );
			if ( $kote2_starter_description || is_customize_preview() ) :
				?>
			<?php echo $kote2_starter_description; /* WPCS: xss ok. */ ?>
			<?php endif; ?>


<?php esc_html_e( 'Primary Menu', 'kote2_starter' ); ?>
			<?php
			// wp_nav_menu( array(
			// 	'theme_location' => 'menu-1',
			// 	'menu_id'        => 'primary-menu',
			// ) );
      wp_nav_menu( array(
        'theme_location'  => 'global',
        'menu_id'         => 'global-menu',
        'container'       => 'nav',
        'container_class' => 'global-nav',
      ) );
			?>
