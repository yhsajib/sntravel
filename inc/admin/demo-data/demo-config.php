<?php

$uri = get_template_directory_uri() . '/inc/admin/demo-data/demo-imgs/';
$sntravel_server_info = apply_filters( 'sntravel_server_info', ['demo_url' => ''] ) ;
// Demos
$demos = array(
	// Elementor Demos
	'sntravel-main' => array(
		'title'       => 'Main',
		'description' => '',
		'screenshot'  => $uri . 'main.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'main',
	),
	'sntravel-luxury' => array(
		'title'       => 'Luxury',
		'description' => '',
		'screenshot'  => $uri . 'luxury.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'luxury',
	),
	'sntravel-coffee' => array(
		'title'       => 'Coffee',
		'description' => '',
		'screenshot'  => $uri . 'coffee.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'coffee',
	),
	'sntravel-pizza' => array(
		'title'       => 'Pizza',
		'description' => '',
		'screenshot'  => $uri . 'pizza.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'pizza',
	),
	'sntravel-fastfood' => array(
		'title'       => 'Fastfood',
		'description' => '',
		'screenshot'  => $uri . 'fastfood.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'fastfood',
	),
	'sntravel-sushi' => array(
		'title'       => 'Sushi',
		'description' => '',
		'screenshot'  => $uri . 'sushi.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'sushi',
	),
	'sntravel-cream' => array(
		'title'       => 'Ice Cream',
		'description' => '',
		'screenshot'  => $uri . 'cream.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'icecream',
	),
	'sntravel-seafood' => array(
		'title'       => 'Seafood',
		'description' => '',
		'screenshot'  => $uri . 'seafood.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'seafood',
	),
	'sntravel-steak' => array(
		'title'       => 'Steak House',
		'description' => '',
		'screenshot'  => $uri . 'steak.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'steak',
	),
	'sntravel-chocolate' => array(
		'title'       => 'Chocolate',
		'description' => '',
		'screenshot'  => $uri . 'chocolate.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'chocolate',
	),
	'sntravel-chinafood' => array(
		'title'       => 'Chinafood',
		'description' => '',
		'screenshot'  => $uri . 'chinafood.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'chinafood',
	),
	'sntravel-bakery' => array(
		'title'       => 'Bakery',
		'description' => '',
		'screenshot'  => $uri . 'bakery.jpg',
		'preview'     => $sntravel_server_info['demo_url'] . 'bakery',
	),
);