<?php
/**
 * Template Name: Sidebar-Right
 * 
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package winter
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
            <?php
		while ( have_posts() ) :
            the_post();
            ?>
            
            <div class="cell small-12 medium-8">
            <?php
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
            endif;
            ?>
            </div>
            <div class="cell small-12 medium-4">
            <?php
        get_sidebar();
            ?>
            </div>
            
        <?php
		endwhile; // End of the loop.
		?>

            </div>
        </div>


	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();