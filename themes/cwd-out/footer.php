<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package winter
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cwd-out' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Powered by %s', 'cwd-out' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Copyright, 2: Site. */
				printf( esc_html__( 'Copyright: %1$s by %2$s.', 'cwd-out' ), '2022', '<a href=" ' . home_url() . ' ">The Online Bookshelf</a>' );
				?>
				<?php
			if ( is_user_logged_in() ) :
				?>
				<a class="login" href="<?php echo esc_url( home_url( '/my-account' ) ); ?>" rel="account">(Log Out)</a>
				<?php
			else :
				?>
				<a class="login" href="<?php echo esc_url( home_url( '/my-account' ) ); ?>" rel="account">(Log In)</a>
				<?php
			endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
