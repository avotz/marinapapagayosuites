<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package marinapapagayosuites
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function marinapapagayosuites_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'marinapapagayosuites_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function marinapapagayosuites_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'marinapapagayosuites_pingback_header' );

function marinapapagayosuites_custom_nav_attributes($atts, $item, $args)
{
	if (isset($atts['rel'])) {
		$porciones = explode("-", $atts['rel']);
		$atts['data-goto'] = $porciones[0];
		//$atts['data-gotoslide'] = $porciones[1];
	}

	return $atts;
}
add_filter('nav_menu_link_attributes', 'marinapapagayosuites_custom_nav_attributes', 10, 3);
