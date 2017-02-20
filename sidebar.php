<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reader
 */



if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	dynamic_sidebar( 'blog-sidebar' );
}



