<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Change Wp logo on wp-admin login ..login head function//

function my_custom_login_logo_inhabitent() { 
	echo '<style type="text/css">  

			#login h1 a {
			background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
			background-size: 290px 60px;
			height: 60px;
			width: 290px; 
			}                            
	</style>';


}

add_action('login_head', 'my_custom_login_logo_inhabitent');

// Change WP logo to link to home page

function the_url_logo_inhabitent() {
	return get_bloginfo();
}
add_filter( 'login_headerurl', 'the_url_logo_inhabitent' );

function inhabitent_logo_title_url() {
	return 'inhabitent';
}
add_filter('login_headertitle', 'inhabitent_logo_title_url');

// filter widget 

//Make hero image customizable 

function inhabitent_dynamic_css() {
	if (! is_page_template('page-templates/about.php' ) ) {
		return;
	}


$image = CFS()->get( 'about_header_image');

if ( ! $image ) {
	return;
}

$hero_css = ".page-template-about .entry-header {
	background:
		linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
		url({$image}) no-repeat center bottom;
	background-size: cover, cover;
}";

wp_add_inline_style( 'tent-style', $hero_css);
}
add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

// Front page as background image 


// function inhabitent_dynamic_css() {
// 	if (! is_page_template('page-templates/front-page.php' ) ) {
// 		return;
// 	}


// $image = CFS()->get( 'about_header_image');

// if ( ! $image ) {
// 	return;
// }

// $hero_css = ".page-template-about .entry-header {
// 	background:
// 		linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%),
// 		url({$image}) no-repeat center bottom;
// 	background-size: cover, cover;
// }";

// wp_add_inline_style( 'tent-style', $hero_css);
// }
// add_action( 'wp_enqueue_scripts', 'inhabitent_dynamic_css' );

