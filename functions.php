<?php

include('functions-branding.php');
include('functions-church.php');

// remove 2013 custom header and fonts
remove_action( 'after_setup_theme', 'twentythirteen_custom_header_setup', 11 );
remove_action( 'admin_print_styles-appearance_page_custom-header', 'twentythirteen_custom_header_fonts' );

// add customized custom header
function tcbc_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => '220e10',
		'default-image'          => '%s/images/TCBC-header.jpg',

		// Set height and width, with a maximum value for the width.
		'height'                 => 230,
        'flex-height'            => true,
		'width'                  => 1600,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'twentythirteen_header_style',
		'admin-head-callback'    => 'twentythirteen_admin_header_style',
		'admin-preview-callback' => 'twentythirteen_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

}
add_action( 'after_setup_theme', 'tcbc_custom_header_setup', 11 );
