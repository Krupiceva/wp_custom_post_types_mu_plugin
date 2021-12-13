<?php
function academy_post_types(){
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
}
add_action('init', 'academy_post_types');