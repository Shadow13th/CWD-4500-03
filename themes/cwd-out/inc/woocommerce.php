<?php
/**
 * Functions which enhance the theme by hooking into the woo commerce
 *
 * @package winter
 */

/**
 * Allow Block Editor for Single Products
 */
function cwd_use_block_editor_for_post_type( $use_block_editor, $post_type ) {
    if ( 'product' === $post_type ) {
        $use_block_editor = true;
    }
    return $use_block_editor;
}
add_filter( 'use_block_editor_for_post_type', 'cwd_use_block_editor_for_post_type', 10, 2 );

/**
 * Remove Default Woo Commerce styles.
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_false' );

/**
 * Re-Add Product Title
 */
// If I want to move a text/image then must first do a "remove_action...." code 
// & then do the "add_action...." code only the start & number at end are different the rest is all the same
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 4 );

/**
 * Add sample text above add-to-cart, delete/change later
 */
function cwd_add_sample_text() {
    echo '<p class="" style="color:black;"> You will love the fabric we use!</p>';
}
add_action( 'woocommerce_before_add_to_cart_form', 'cwd_add_sample_text', 10 );

/**
 * Remove Tab Data, 
 * actually like how this looks with the code lines below. 
 * (much better than default) Keep or alter the base
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
// add_action( 'woocommerce_after_single_product_summary', 'the_content', 10 );
function cwd_add_content() {
    echo '<div class="content">' . get_the_content() . '</div>';
}
add_action( 'woocommerce_after_single_product_summary', 'cwd_add_content', 10 );

