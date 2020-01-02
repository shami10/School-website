<?php 


//adding our CSS and JS files here

function get_setup(){
	wp_enqueue_style('fontawsome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('stylesheet', get_stylesheet_uri(),NULL,microtime(),'all');
	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrapjs', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_script('mainjs', get_theme_file_uri('/js/main.js'),NULL,microtime(),'all');
}

add_action('wp_enqueue_scripts', 'get_setup');

//add theme support

function get_init(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('html5',
		array('comment-list', 'comment-form', 'search-form')
);
}
add_action('after_setup_theme', 'get_init');

//adding new project as post type like we add new post it will work like that

// function get_custom_post_type(){
// 	register_post_type('project',
// 		array(
// 			'rewrite' $this-> array('slug', this.'projects'),
// 			'labels' => array(
// 				'name' => 'Projects',
// 				'singular-name' => 'poject',
// 				'add_new_item' => 'Add New Project',
// 				'edit_item' => 'Edit Project'
// 			),
// 			'menu-icon' => 'dashicons-clipboard',
// 			'public' => true,
// 			'has-archive' => true,
// 			'supports' => array(
// 				'thumbnail', 'editor', 'excerpt', 'comments'
// 			)
// 		)
// 	);
// }

// add_action('init', 'get_custom_post_type');

