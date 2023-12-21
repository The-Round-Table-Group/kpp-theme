<?php

$labels = [
	'name'               => __( 'Events', 'kpp' ),
	'singular_name'      => __( 'News', 'kpp' ),
	'add_new'            => _x( 'Add Event', 'kpp', ),
	'add_new_item'       => __( 'Add Event', 'kpp' ),
	'edit_item'          => __( 'Edit Event', 'kpp' ),
	'new_item'           => __( 'New Event', 'kpp' ),
	'view_item'          => __( 'View Event', 'kpp' ),
	'search_items'       => __( 'Search Events', 'kpp' ),
	'not_found'          => __( 'No Events found', 'kpp' ),
	'not_found_in_trash' => __( 'No Events found in Trash', 'kpp' ),
	'parent_item_colon'  => __( 'Parent Event:', 'kpp' ),
	'menu_name'          => __( 'Events', 'kpp' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'event-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-video-alt2',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail' ],
];
register_post_type( 'event', $args );

$tax_labels = [
	'name' 				=> _x( 'Event Types', 'kpp' ),
	'singular_name' 	=> _x( 'Event Type', 'kpp' ),
	'search_items' 		=> __( 'Search Event Types', 'kpp' ),
	'all_items' 		=> __( 'All Event Types', 'kpp' ),
	'edit_item' 		=> __( 'Edit Event Type', 'kpp' ),
	'update_item' 		=> __( 'Update Event Type', 'kpp' ),
	'add_new_item' 		=> __( 'Add Event Type', 'kpp' ),
	'new_item_name' 	=> __( 'Create Event Type', 'kpp' ),
	'menu_name' 		=> __( 'Event Types', 'kpp' ),
	'parent_item'		=> __( 'Parent Event Type:', 'kpp' ),
];

$tax_args = [
	'hierarchical' 	    => true,
	'labels' 	    	=> $tax_labels,
	'show_ui' 	    	=> true,
	'show_admin_column' => true,
	'has_archive'		=> false,
	'query_var'	    	=> true,
	'show_in_rest'		=> true,
	'rewrite'			=> true,
];
register_taxonomy( 'event-tax', 'event', $tax_args );