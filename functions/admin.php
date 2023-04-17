<?php

function my_acf_op_init() {
	if ( function_exists( 'acf_add_options_sub_page' ) ) {
		$parent = acf_add_options_page(
			array(
				'page_title' => __( 'Webcode General Settings' ),
				'menu_title' => __( 'Theme settings' ),
				'redirect'   => false,
				'post_id'    => 'options',
			),
		);

		$child = acf_add_options_sub_page(
			array(
				'page_title'  => __( 'Colors' ),
				'menu_title'  => __( 'Colors' ),
				'parent_slug' => $parent['menu_slug'],
			),
		);

		$child = acf_add_options_sub_page(
			array(
				'page_title'  => __( 'Typography' ),
				'menu_title'  => __( 'Typography' ),
				'parent_slug' => $parent['menu_slug'],
			),
		);

		$child = acf_add_options_sub_page(
			array(
				'page_title'  => __( 'CPT' ),
				'menu_title'  => __( 'CPT' ),
				'parent_slug' => $parent['menu_slug'],
			),
		);

		$child = acf_add_options_sub_page(
			array(
				'page_title'  => __( 'Taxonomy' ),
				'menu_title'  => __( 'Taxonomy' ),
				'parent_slug' => $parent['menu_slug'],
			),
		);

		$child = acf_add_options_sub_page(
			array(
				'page_title'  => __( 'Header settings' ),
				'menu_title'  => __( 'Header' ),
				'parent_slug' => $parent['menu_slug'],
			),
		);

		$child = acf_add_options_sub_page(
			array(
				'page_title'  => __( 'Social Settings' ),
				'menu_title'  => __( 'Social' ),
				'parent_slug' => $parent['menu_slug'],
			),
		);
	}
}
