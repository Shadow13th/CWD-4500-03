<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package winter
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<!-- <img class="myLogo" src="../assets/img/bookshelfLeft.png"/> -->
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?>
			<!-- <img src="../assets/img/bookshelf.png"/> -->
			</a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			if ( is_user_logged_in() ):
				?>
				<p class="welcome">Hello, registered user!</p>
				<?php
			else:
				?>
				<p class="welcome"></p>
				<?php
			endif;
			$cwd_out_description = get_bloginfo( 'description', 'display' );
			if ( $cwd_out_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cwd_out_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cwd-out' ); ?></button>
			<?php
			// if ( has_nav_menu( 'menu-primary' ) ) {
			wp_nav_menu(
				array( 
					'theme_location' => 'menu-primary',
					'menu_id'        => 'primary-menu',
					'container'		=> false,
					'container'     => 'div',
					// 'container_class'      => 'myNav',
    				// 'container_id'         => '',
					// 'tag' => 'p',
					// 'menu' => 'primary',
    				// 'link_before' => '<span class="screen-reader-text">',
    				// 'link_after' => '</span>',
				)
	// 		$args = wp_parse_args( $args, $defaults );
    // if ( ! in_array( $args['item_spacing'], array( 'preserve', 'discard' ), true ) ) {
    //     // Invalid value, fall back to default.
    //     $args['item_spacing'] = $defaults['item_spacing'];
	// }
	// 	$args = apply_filters( 'wp_nav_menu_args', $args );
    // 	$args = (object) $args;
			);
		// }
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
