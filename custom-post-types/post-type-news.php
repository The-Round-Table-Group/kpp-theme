<?php

$labels = [
	'name'               => __( 'News Posts', 'kpp' ),
	'singular_name'      => __( 'News', 'kpp' ),
	'add_new'            => _x( 'Add News Post', 'kpp', ),
	'add_new_item'       => __( 'Add News Post', 'kpp' ),
	'edit_item'          => __( 'Edit News Post', 'kpp' ),
	'new_item'           => __( 'New News Post', 'kpp' ),
	'view_item'          => __( 'View News Post', 'kpp' ),
	'search_items'       => __( 'Search News Posts', 'kpp' ),
	'not_found'          => __( 'No News Posts found', 'kpp' ),
	'not_found_in_trash' => __( 'No News Posts found in Trash', 'kpp' ),
	'parent_item_colon'  => __( 'Parent News Post:', 'kpp' ),
	'menu_name'          => __( 'News Posts', 'kpp' ),
];

$args = [
	'labels'              => $labels,
	'hierarchical'        => false,
	'description'         => '',
	'taxonomies'          => [ 'news-tax' ],
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'show_in_admin_bar'   => true,
	'show_in_rest'		  => true,
	'menu_icon'           => 'dashicons-edit',
	'show_in_nav_menus'   => false,
	'publicly_queryable'  => true,
	'exclude_from_search' => false,
	'has_archive'         => false,
	'query_var'           => true,
	'can_export'          => true,
	'rewrite'             => true,
	'capability_type'     => 'post',
	'supports'            => [ 'title', 'thumbnail', 'editor', 'author' ],
];
register_post_type( 'news', $args );

$tax_labels = [
	'name' 				=> _x( 'News Types', 'kpp' ),
	'singular_name' 	=> _x( 'News Type', 'kpp' ),
	'search_items' 		=> __( 'Search News Types', 'kpp' ),
	'all_items' 		=> __( 'All News Types', 'kpp' ),
	'edit_item' 		=> __( 'Edit News Type', 'kpp' ),
	'update_item' 		=> __( 'Update News Type', 'kpp' ),
	'add_new_item' 		=> __( 'Add News Type', 'kpp' ),
	'new_item_name' 	=> __( 'Create News Type', 'kpp' ),
	'menu_name' 		=> __( 'News Types', 'kpp' ),
	'parent_item'		=> __( 'Parent News Type:', 'kpp' ),
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
register_taxonomy( 'news-tax', 'news', $tax_args );