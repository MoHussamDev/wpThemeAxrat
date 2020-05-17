<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package fiveh
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

 function debug_to_console( $data ) {
    if ( is_array( $data ) )
     $output = "<script>console.log( 'Debug Objects: JSON.parse(" . json_encode($data) . ")' );</script>";
     else
     $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
    echo $output;
    }
function fiveh_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'fiveh_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function fiveh_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'fiveh_pingback_header' );

add_action('wp_enqueue_scripts', 'load_scripts', 12);

function load_scripts() {
	wp_enqueue_style( 'SiteStyle',get_template_directory_uri()."/dist/css/style.css", array(), microtime());
	wp_enqueue_style( 'slickStyle',get_template_directory_uri()."/dist/css/swiper.min.css");
	wp_enqueue_script('fontawesome','https://kit.fontawesome.com/1b49ad937d.js', array(), '', true  );
	wp_enqueue_script('jquery', get_template_directory_uri()."/dist/js/jquery.js", array(), '1.0.0', false  );
	wp_enqueue_script('bootstrap', get_template_directory_uri()."/dist/js/bootstrap.min.js", array(), '1.0.0', false  );
	wp_enqueue_script('slick', get_template_directory_uri()."/dist/js/swiper.min.js", array(), '1.0.0', false  );
}

function add_attribs_to_scripts( $tag, $handle, $src ) {
// The handles of the enqueued scripts we want to defer
$fontAwsome = array(
	'fontawesome',
);

if ( in_array( $handle, $fontAwsome ) ) {
    return '<script src="' . $src . '" crossorigin="anonymous" type="text/javascript"></script>' . "\n";
}
return $tag;
} 
add_filter( 'script_loader_tag', 'add_attribs_to_scripts', 10, 3 );
// add_filter('acf/settings/show_admin', '__return_false');


function xrat_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'xrat_mime_types');
