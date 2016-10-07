<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles');
function my_theme_enqueue_styles() {
	wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');	
}

/*function google_fonts(){
	$query_args = array(
	'family' => 'Rokkitt:400,700',
	);
	
	wp_register_style( 'google_fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );
}

add_action('wp_enqueue_scripts', 'google_fonts'); */

function wpb_add_google_fonts() {
	
	wp_enqueue_style ( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Rokkitt', false);
}

add_action ('wp_enqueue_scripts', 'wpb_add_google_fonts');


 

?>