<?php

function add_custom_taxonomies() {

	$taxs = get_field( 'add-tax', 'option' );

	foreach ( $taxs as $tax ) {
		$slug     = $tax['choose-cpt'];
		$name     = $tax['tax-name'];
		$singular = $tax['singular-tax-name'];

		register_taxonomy(
			$name,
			$slug,
			array(
				'hierarchical' => true,
				'labels'       => array(
					'name'              => $name,
					'singular_name'     => $singular,
					'search_items'      => __( 'Search' ) . ' ' . $name,
					'all_items'         => __( 'All' ) . ' ' . $name,
					'parent_item'       => __( 'Parent' ) . ' ' . $singular,
					'parent_item_colon' => __( 'Parent' ) . ' ' . $singular . ':',
					'edit_item'         => __( 'Edit' ) . ' ' . $singular,
					'update_item'       => __( 'Update' ) . ' ' . $singular,
					'add_new_item'      => __( 'Add New' ) . ' ' . $singular,
					'new_item_name'     => __( 'New' ) . ' ' . $singular . ' ' . __( 'Name' ),
					'menu_name'         => $name,
				),
				'rewrite'      => array(
					'slug'         => $slug,
					'with_front'   => false,
					'hierarchical' => true,
				),
			),
		);
	}
}
add_action( 'init', 'add_custom_taxonomies' );
