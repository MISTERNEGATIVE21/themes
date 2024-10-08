<?php
/**
 * Bedrock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bedrock
 * @since Bedrock 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'portia_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since Bedrock 1.0
	 *
	 * @return void
	 */
	function portia_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'portia' );
	}

endif;

add_action( 'after_setup_theme', 'portia_support' );

if ( ! function_exists( 'portia_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bedrock 1.0
	 *
	 * @return void
	 */
	function portia_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'portia-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'portia-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'portia_styles' );
