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
		<?php
		$recipe_args = array(
			'post_type' => array( 'cwd_recipe' ),
			'posts_status' => 'publish',
			'posts_per_page' => 3,
			'orderby' => 'rand',
			'post_not_in' => array( get_the_ID() )
		);
		$recipe_query = new WP_Query( $recipe_args );

		if( $recipe_query -> have_posts() ) {
		?>
		<div class="grid-container">
			<div class="grid-x grid-margin-x grid-margin-y footer-ads">
				<?php
				while ( $recipe_query -> have_posts() ) {
					$recipe_query -> the_post();
					?>
					<div class="cell small-12 medium-4 large-4">
					<?php
					the_post_thumbnail();
					the_title( '<h3>', '</h3>' );
					the_excerpt();
					?>
					</div>
					<?php
				}
				wp_reset_postdata();
				?>
			</div>
		</div>
		<?php
		}
		?>
	
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
