<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package sulfur
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function sulfur_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'sulfur_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function sulfur_jetpack_setup
add_action( 'after_setup_theme', 'sulfur_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function sulfur_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function sulfur_infinite_scroll_render
