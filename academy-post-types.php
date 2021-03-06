<?php
function academy_post_types(){
	//Event post type
	register_post_type('event', array(
		'capability_type' => 'event',
		'map_meta_cap' => true,
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

	//Teacher post type
	register_post_type('teacher', array(
		'supports' => array(
			'title',
			'editor',
			'thumbnail'
		),
		'public' => true,
		'show_in_rest' => true,
		'labels' => array(
			'name' => 'Teachers',
			'add_new_item' => 'Add New Teacher',
			'edit_item' => 'Edit Teacher',
			'all_items' => 'All Teachers',
			'singular_name' => "Teacher"
		),
		'menu_icon' => 'dashicons-businessman'
	));

	//Campus post type
	register_post_type('campus', array(
		'capability_type' => 'campus',
		'map_meta_cap' => true,
		'rewrite' => array(
			'slug' => 'campuses'
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
			'name' => 'Campuses',
			'add_new_item' => 'Add New Campus',
			'edit_item' => 'Edit Campus',
			'all_items' => 'All Campuses',
			'singular_name' => "Campus"
		),
		'menu_icon' => 'dashicons-location-alt'
	));

	//Note post type
	register_post_type('note', array(
		'capability_type' => 'note',
		'map_meta_cap' => true,
		'supports' => array(
			'title',
			'editor'
		),
		'public' => false,
		'show_ui' => true,
		'show_in_rest' => true,
		'labels' => array(
			'name' => 'Notes',
			'add_new_item' => 'Add New Note',
			'edit_item' => 'Edit Note',
			'all_items' => 'All Notes',
			'singular_name' => "Note"
		),
		'menu_icon' => 'dashicons-welcome-write-blog'
	));

	//Like post type
	register_post_type('like', array(
		'supports' => array(
			'title'
		),
		'public' => false,
		'show_ui' => true,
		'labels' => array(
			'name' => 'Likes',
			'add_new_item' => 'Add New Like',
			'edit_item' => 'Edit Like',
			'all_items' => 'All Likes',
			'singular_name' => "Like"
		),
		'menu_icon' => 'dashicons-heart'
	));

}
add_action('init', 'academy_post_types');