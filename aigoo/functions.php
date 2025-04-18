<?php
/**
 * Aigoo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aigoo
 * @since Aigoo 1.0
 */


if ( ! function_exists( 'aigoo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Aigoo 1.0
	 *
	 * @return void
	 */
	function aigoo_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'aigoo' );
	}

endif;

add_action( 'after_setup_theme', 'aigoo_support' );

if ( ! function_exists( 'aigoo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Aigoo 1.0
	 *
	 * @return void
	 */
	function aigoo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'aigoo-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'aigoo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'aigoo_styles' );
