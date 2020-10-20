<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$themecsspath = get_stylesheet_directory() . '/css/theme.min.css';
		wp_enqueue_style( 'slick-slider', get_template_directory_uri() . '/css/slick.css' );
	  wp_enqueue_style( 'slick-slider-theme', get_template_directory_uri() . '/css/slick-theme.css' );
		wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), filemtime( $themecsspath ) );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.7', true ); // Slick Slider
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'mp-theme', get_template_directory_uri() . '/js/montpelier-theme.js', array('jquery', 'understrap-scripts'), '', true ); // Montpelier Theme JS
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
