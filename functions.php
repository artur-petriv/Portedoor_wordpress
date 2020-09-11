<?php
add_action('wp_enqueue_scripts', 'portedoor_scripts');

function portedoor_scripts() {
	// Main Styles
	wp_enqueue_style( 'portedoor-style', get_stylesheet_uri() );

	// Main scripts
	wp_enqueue_script( 'portedoor-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);

	// Add defer for scripts by ID
	add_filter( 'script_loader_tag', 'change_my_script', 10, 3 );

	function change_my_script( $tag, $handle, $src ){
		if( 'portedoor-scripts' === $handle ){
			return str_replace( ' src', ' defer src', $tag );
		}
		return $tag;
	}
};

?>