// Cannot get it to show up on the Wordpress site
// Tried changing & looking for any code errors on several files but got nothing
// Check if we have the code on DC Conect
console.log( 'block editor works' );

wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'fancy-quote',
    label: 'Fancy Quote',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );