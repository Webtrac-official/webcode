<?php
/*
* Creating a function to create our CPT
*/

function custom_post_type() {

	$cpts = get_field( 'add-cpt', 'option' );

	foreach ( $cpts as $cpt ) {
		$name          = $cpt['cpt-name'];
		$slug          = $cpt['cpt-slug'];
		$singular_name = $cpt['cpt-singular-name'];
		$plural_name   = $cpt['cpt-plural-name'];
		$icon          = $cpt['cpt-icon'];
		$supports      = $cpt['cpt-supports'];

		// Set UI labels for Custom Post Type
		$labels = array(
			'name'               => $name,
			'singular_name'      => $singular_name,
			'menu_name'          => $plural_name,
			'parent_item_colon'  => __( 'Parent', 'webcode' ) . ' ' . $singular_name,
			'all_items'          => __( 'All', 'webcode' ) . ' ' . $plural_name,
			'view_item'          => __( 'View', 'webcode' ) . ' ' . $singular_name,
			'add_new_item'       => __( 'Add New', 'webcode' ) . ' ' . $singular_name,
			'add_new'            => __( 'Add New', 'webcode' ),
			'edit_item'          => __( 'Edit', 'webcode' ) . ' ' . $singular_name,
			'update_item'        => __( 'Update', 'webcode' ) . ' ' . $singular_name,
			'search_items'       => __( 'Search', 'webcode' ) . ' ' . $singular_name,
			'not_found'          => __( 'Not Found', 'webcode' ),
			'not_found_in_trash' => __( 'Not found in Trash', 'webcode' ),
		);

		// Set other options for Custom Post Type
		$args = array(
			'label'               => $plural_name,
			'description'         => '',
			'labels'              => $labels,
			'supports'            => array( 'title', 'custom-fields' ),
			'taxonomies'          => array( '' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest'        => true,
		);

		// Registering your Custom Post Type
		register_post_type( $name, $args );
	}
}
