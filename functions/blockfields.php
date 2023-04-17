<?php

global $styling_fields;
global $spacings_fields;
global $slider_fields;

$color_primary   = (string) get_field( 'primary-color', 'option' );
$color_secondary = (string) get_field( 'secondary-color', 'option' );
$color_black     = (string) get_field( 'black-color', 'option' );
$color_white     = (string) get_field( 'white-color', 'option' );
$extra_color_1   = (string) get_field( 'extra-color-1', 'option' );
$extra_color_2   = (string) get_field( 'extra-color-2', 'option' );
$extra_color_3   = (string) get_field( 'extra-color-3', 'option' );
$extra_color_4   = (string) get_field( 'extra-color-4', 'option' );

$styling_fields = array(
	'key'        => 'field_' . $blockname . '_styling_fields',
	'name'       => $blockname . '-styling-fields',
	'type'       => 'group',
	'layout'     => 'block',
	'sub_fields' => array(
		array(
			'key'     => 'field_' . $blockname . '_background',
			'label'   => __( 'Choose the background type', 'wtrc' ),
			'name'    => 'background',
			'type'    => 'radio',
			'layout'  => 'vertical',
			'wrapper' => array(
				'width' => '100',
			),
			'choices' => array(
				'none'   => __( 'None', 'wtrc' ),
				'color'  => __( 'Color', 'wtrc' ),
				'image'  => __( 'Image', 'wtrc' ),
				'slider' => __( 'Slider', 'wtrc' ),
			),
		),
		array(
			'key'               => 'field_' . $blockname . '_background_color',
			'label'             => __( 'Choose the background color', 'wtrc' ),
			'name'              => 'background-color',
			'type'              => 'radio',
			'required'          => 1,
			'wrapper'           => array(
				'width' => '100',
			),
			'choices'           => array(
				$color_primary   => '<div class="admin-color" style="background-color:' . $color_primary . '">',
				$color_secondary => '<div class="admin-color" style="background-color:' . $color_secondary . '">',
				$color_black     => '<div class="admin-color" style="background-color:' . $color_black . '">',
				$color_white     => '<div class="admin-color" style="border: 1px solid grey; background-color:' . $color_white . ';">',
				$extra_color_1   => '<div class="admin-color" style="background-color:' . $extra_color_1 . '">',
				$extra_color_2   => '<div class="admin-color" style="background-color:' . $extra_color_2 . '">',
				$extra_color_3   => '<div class="admin-color" style="background-color:' . $extra_color_3 . '">',
				$extra_color_4   => '<div class="admin-color" style="background-color:' . $extra_color_4 . '">',
			),
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_' . $blockname . '_background',
						'operator' => '==',
						'value'    => 'color',
					),
				),
			),
		),
		array(
			'key'               => 'field_' . $blockname . '_background_image',
			'label'             => __( 'Choose the background image', 'wtrc' ),
			'name'              => 'background-image',
			'type'              => 'image',
			'required'          => 1,
			'return_format'     => 'id',
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_' . $blockname . '_background',
						'operator' => '==',
						'value'    => 'image',
					),
				),
			),
		),
		array(
			'key'               => 'field_' . $blockname . '_background_overlay_color',
			'label'             => __( 'Choose the color of the background overlay', 'wtrc' ),
			'name'              => 'background-overlay-color',
			'type'              => 'color_picker',
			'wrapper'           => array(
				'width' => '50',
			),
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_' . $blockname . '_background',
						'operator' => '==',
						'value'    => 'image',
					),
				),
				array(
					array(
						'field'    => 'field_' . $blockname . '_background',
						'operator' => '==',
						'value'    => 'slider',
					),
				),
			),
		),
		array(
			'key'               => 'field_' . $blockname . '_background_overlay_opacity',
			'label'             => __( 'Define the opacity of the background overlay', 'wtrc' ),
			'name'              => 'background-overlay-opacity',
			'type'              => 'range',
			'min'               => 0,
			'max'               => 100,
			'step'              => 1,
			'default_value'     => 0,
			'append'            => '%',
			'wrapper'           => array(
				'width' => '50',
			),
			'conditional_logic' => array(
				array(
					array(
						'field'    => 'field_' . $blockname . '_background',
						'operator' => '==',
						'value'    => 'image',
					),
				),
				array(
					array(
						'field'    => 'field_' . $blockname . '_background',
						'operator' => '==',
						'value'    => 'slider',
					),
				),
			),
		),
		array(
			'key'           => 'field_' . $blockname . '_heading_color',
			'label'         => __( 'Choose the color of the headings', 'wtrc' ),
			'name'          => 'heading-color',
			'type'          => 'radio',
			'required'      => 1,
			'default_value' => $color_black,
			'wrapper'       => array(
				'width' => '33',
			),
			'choices'       => array(
				$color_primary   => '<div class="admin-color" style="background-color:' . $color_primary . '">',
				$color_secondary => '<div class="admin-color" style="background-color:' . $color_secondary . '">',
				$color_black     => '<div class="admin-color" style="background-color:' . $color_black . '">',
				$color_white     => '<div class="admin-color" style="border: 1px solid grey; background-color:' . $color_white . ';">',
				$extra_color_1   => '<div class="admin-color" style="background-color:' . $extra_color_1 . '">',
				$extra_color_2   => '<div class="admin-color" style="background-color:' . $extra_color_2 . '">',
				$extra_color_3   => '<div class="admin-color" style="background-color:' . $extra_color_3 . '">',
				$extra_color_4   => '<div class="admin-color" style="background-color:' . $extra_color_4 . '">',
			),
		),
		array(
			'key'           => 'field_' . $blockname . '_bodytext_color',
			'label'         => __( 'Choose the color of the bodytext', 'wtrc' ),
			'name'          => 'bodytext-color',
			'type'          => 'radio',
			'required'      => 1,
			'default_value' => $color_black,
			'wrapper'       => array(
				'width' => '33',
			),
			'choices'       => array(
				$color_primary   => '<div class="admin-color" style="background-color:' . $color_primary . '">',
				$color_secondary => '<div class="admin-color" style="background-color:' . $color_secondary . '">',
				$color_black     => '<div class="admin-color" style="background-color:' . $color_black . '">',
				$color_white     => '<div class="admin-color" style="border: 1px solid grey; background-color:' . $color_white . ';">',
				$extra_color_1   => '<div class="admin-color" style="background-color:' . $extra_color_1 . '">',
				$extra_color_2   => '<div class="admin-color" style="background-color:' . $extra_color_2 . '">',
				$extra_color_3   => '<div class="admin-color" style="background-color:' . $extra_color_3 . '">',
				$extra_color_4   => '<div class="admin-color" style="background-color:' . $extra_color_4 . '">',
			),
		),
		array(
			'key'           => 'field_' . $blockname . '_link_color',
			'label'         => __( 'Choose the color of every link', 'wtrc' ),
			'name'          => 'link-color',
			'type'          => 'radio',
			'required'      => 1,
			'default_value' => $color_primary,
			'wrapper'       => array(
				'width' => '33',
			),
			'choices'       => array(
				$color_primary   => '<div class="admin-color" style="background-color:' . $color_primary . '">',
				$color_secondary => '<div class="admin-color" style="background-color:' . $color_secondary . '">',
				$color_black     => '<div class="admin-color" style="background-color:' . $color_black . '">',
				$color_white     => '<div class="admin-color" style="border: 1px solid grey; background-color:' . $color_white . ';">',
				$extra_color_1   => '<div class="admin-color" style="background-color:' . $extra_color_1 . '">',
				$extra_color_2   => '<div class="admin-color" style="background-color:' . $extra_color_2 . '">',
				$extra_color_3   => '<div class="admin-color" style="background-color:' . $extra_color_3 . '">',
				$extra_color_4   => '<div class="admin-color" style="background-color:' . $extra_color_4 . '">',
			),
		),
	),
);

$spacings_fields = array(
	'key'        => 'field_' . $blockname . '_spacingsfields',
	'name'       => $blockname . '-spacings-fields',
	'type'       => 'group',
	'layout'     => 'block',
	'sub_fields' => array(
		array(
			'key'     => 'field_' . $blockname . '_fullwidth',
			'label'   => __( 'Make this block fullwidth?', 'wtrc' ),
			'name'    => 'full-width',
			'type'    => 'radio',
			'choices' => array(
				'no'  => __( 'No', 'wtrc' ),
				'yes' => __( 'Yes', 'wtrc' ),
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingtop_desktop',
			'label'   => __( 'How much spacing in the topside? (desktop)', 'wtrc' ),
			'name'    => 'padding-top-desktop',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingbottom_desktop',
			'label'   => __( 'How much spacing in the bottomside? (desktop)', 'wtrc' ),
			'name'    => 'padding-bottom-desktop',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingleft_desktop',
			'label'   => __( 'How much spacing in the leftside? (desktop)', 'wtrc' ),
			'name'    => 'padding-left-desktop',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingright_desktop',
			'label'   => __( 'How much spacing in the rightside? (desktop)', 'wtrc' ),
			'name'    => 'padding-right-desktop',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingtop_tablet',
			'label'   => __( 'How much spacing in the topside? (tablet)', 'wtrc' ),
			'name'    => 'padding-top-tablet',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingbottom_tablet',
			'label'   => __( 'How much spacing in the bottomside? (tablet)', 'wtrc' ),
			'name'    => 'padding-bottom-tablet',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingleft_tablet',
			'label'   => __( 'How much spacing in the leftside? (tablet)', 'wtrc' ),
			'name'    => 'padding-left-tablet',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingright_tablet',
			'label'   => __( 'How much spacing in the rightside? (tablet)', 'wtrc' ),
			'name'    => 'padding-right-tablet',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingtop_mobile',
			'label'   => __( 'How much spacing in the topside? (mobile)', 'wtrc' ),
			'name'    => 'padding-top-mobile',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingbottom_mobile',
			'label'   => __( 'How much spacing in the bottomside? (mobile)', 'wtrc' ),
			'name'    => 'padding-bottom-mobile',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingleft_mobile',
			'label'   => __( 'How much spacing in the leftside? (mobile)', 'wtrc' ),
			'name'    => 'padding-left-mobile',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key'     => 'field_' . $blockname . '_paddingright_mobile',
			'label'   => __( 'How much spacing in the rightside? (mobile)', 'wtrc' ),
			'name'    => 'padding-right-mobile',
			'type'    => 'number',
			'append'  => 'px',
			'wrapper' => array(
				'width' => '25',
			),
		),
	),
);

$slider_fields = array(
	'key'               => 'field_' . $blockname . '_slider_fields',
	'name'              => $blockname . '-slider-fields',
	'type'              => 'group',
	'layout'            => 'block',
	'sub_fields'        => array(
		array(
			'key'           => 'field_' . $blockname . '_background_slider',
			'label'         => __( 'Choose the images for the slideshow', 'wtrc' ),
			'name'          => 'background-slider',
			'type'          => 'gallery',
			'required'      => 1,
			'return_format' => 'id',
		),
		array(
			'key'      => 'field_' . $blockname . '_animation_select',
			'label'    => __( 'Select the type of animation to be used by this slider', 'wtrc' ),
			'name'     => 'animation-select',
			'type'     => 'select',
			'required' => 1,
			'wrapper'  => array(
				'width' => '50',
			),
			'choices'  => array(
				'fade'      => __( 'Fade', 'wtrc' ),
				'coverflow' => __( 'Coverflow', 'wtrc' ),
				'flip'      => __( 'Flip', 'wtrc' ),
				'cube'      => __( 'Cube', 'wtrc' ),
				'slide'     => __( 'Slide', 'wtrc' ),
			),
		),
		array(
			'key'           => 'field_' . $blockname . '_animation_speed',
			'label'         => __( 'How fast should the animation be? (in milliseconds)', 'wtrc' ),
			'name'          => 'animation-speed',
			'type'          => 'number',
			'append'        => 'ms',
			'default_value' => 400,
			'wrapper'       => array(
				'width' => '50',
			),
			'required'      => 1,
			'step'          => 100,
		),
		array(
			'key'           => 'field_' . $blockname . '_animation_speed',
			'label'         => __( 'How fast should the animation be? (in milliseconds)', 'wtrc' ),
			'name'          => 'animation-speed',
			'type'          => 'number',
			'append'        => 'ms',
			'default_value' => 400,
			'wrapper'       => array(
				'width' => '50',
			),
			'required'      => 1,
			'step'          => 100,
		),
		array(
			'key'     => 'field_' . $blockname . '_animation_loop',
			'label'   => __( 'Should the slider loop through the slides?', 'wtrc' ),
			'name'    => 'animation-loop',
			'type'    => 'select',
			'wrapper' => array(
				'width' => '50',
			),
			'choices' => array(
				true  => __( 'Yes', 'wtrc' ),
				false => __( 'No', 'wtrc' ),
			),
		),
		array(
			'key'         => 'field_' . $blockname . '_animation_autoplay',
			'label'       => __( 'How fast should the slider go through the slides? (Leave empty to turn of autoplay)', 'wtrc' ),
			'name'        => 'animation-autoplay',
			'type'        => 'number',
			'append'      => 'ms',
			'placeholder' => '4000',
			'wrapper'     => array(
				'width' => '50',
			),
		),
	),
	'conditional_logic' => array(
		array(
			array(
				'field'    => 'field_' . $blockname . '_background',
				'operator' => '==',
				'value'    => 'slider',
			),
		),
	),
);

