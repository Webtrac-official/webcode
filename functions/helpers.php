<?php

if ( function_exists( 'acf_add_local_field_group' ) ) {

	function webcode_add_blocks() {
		$blocks    = get_stylesheet_directory() . '/blocks';
		$blocks    = array_diff( scandir( $blocks ), array( '..', '.' ) );
		$cptblocks = get_field( 'add-cpt', 'option' );
		$cpts       = array( 'page' );

		foreach ( $blocks as $block ) {
			$url = get_stylesheet_directory() . '/blocks/' . $block . '/acf.php';
			if ( file_exists( $url ) ) {
				include $url;
			}
		}

		foreach ( $cptblocks as $cptblock ) {
			if ( in_array( 'blocks', $cptblock['cpt-fields'] ) ) {
				array_push( $cpts, $cptblock['cpt-slug'] );
			}
		}

		foreach ( $cpts as $cpt ) {
			acf_add_local_field_group(
				array(
					'key'      => $cpt . '_blocks',
					'title'    => $cpt,
					'fields'   => array(
						array(
							'key'       => 'field_blocks_tab',
							'label'     => __( 'Content', 'wtrc' ),
							'type'      => 'tab',
							'placement' => 'top',
						),
						array(
							'key'          => 'field_blocks',
							'labels'       => 'blocks',
							'name'         => 'blocks',
							'type'         => 'flexible_content',
							'button_label' => 'Add new block',
							'layouts'      => $layouts,
						),
						array(
							'key'       => 'field_style_tab',
							'label'     => __( 'Style', 'wtrc' ),
							'type'      => 'tab',
							'placement' => 'top',
						),
						array(
							'key'       => 'field_settings_tab',
							'label'     => __( 'Settings', 'wtrc' ),
							'type'      => 'tab',
							'placement' => 'top',
						),
					),
					'location' => array(
						array(
							array(
								'param'    => 'post_type',
								'operator' => '==',
								'value'    => $cpt,
							),
						),
					),
				),
			);
		}
	}
};
