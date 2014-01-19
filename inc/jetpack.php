<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package fastr
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function fastr_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'fastr_jetpack_setup' );
