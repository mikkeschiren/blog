<?php

/*
// Override any of the default settings below:

$config['site_title'] = 'Pico';			// Site title
$config['base_url'] = ''; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'default'; 			// Set the theme (defaults to "default")
$config['theme'] = 'excavating';
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => false					// Enable Twig debug
);
$config['pages_order_by'] = 'alpha';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme

*/

$config['pages_order_by'] = 'date';
$config['site_title'] = 'Mikael Schirén';
$config['theme'] = 'pure';
$config['pages_order'] = 'desc';
$config['date_format'] = 'j/n Y';
$config['opengraph_default_image'] = 'http://mikaelschiren.se/skrivkramp/themes/pure/images/logo.jpg';

$config['pagination_limit'] = 3;
$config['pagination_next_text'] = 'äldre inlägg >';
$config['pagination_prev_text'] = '< nyare inlägg';
$config['pagination_page_indicator'] = 'sida';
