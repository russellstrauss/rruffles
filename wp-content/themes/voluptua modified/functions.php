<?php

// update_option( 'siteurl', 'http://journal.dev' );
// update_option( 'home', 'http://journal.dev' );

if ( function_exists('register_sidebar') ) {
	register_sidebars((3),array(
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
			'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
}


// Prevent WP from adding classes and hardcoded height and width attributes for images
add_filter( 'get_image_tag_class', '__return_empty_string' );
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}


?>
