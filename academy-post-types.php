<?php
function academy_post_types(){
	//Event post type
	register_post_type('event', array(
		'rewrite' => array(
			'slug' => 'events'
		),
		'supports' => array(
			'title',
			'editor',
			'excerpt'
		),
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add New Event',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => "Event"
		),
		'menu_icon' => 'dashicons-calendar'
	));

	//Course post type
	register_post_type('course', array(
		'rewrite' => array(
			'slug' => 'courses'
		),
		'supports' => array(
			'title',
			'editor'
		),
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => true,
		'labels' => array(
			'name' => 'Courses',
			'add_new_item' => 'Add New Course',
			'edit_item' => 'Edit Course',
			'all_items' => 'All Courses',
			'singular_name' => "Course"
		),
		'menu_icon' => 'dashicons-awards'
	));
}
add_action('init', 'academy_post_types');