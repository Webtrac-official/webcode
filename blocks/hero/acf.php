<?php
$blockname = 'hero';

global $styling_fields;
$styling_fields['key']  = 'field_' . $blockname . '_stylingfields';
$styling_fields['name'] = $blockname . '-styling-fields';

global $spacings_fields;
$spacings_fields['key']  = 'field_' . $blockname . '_spacingsfields';
$spacings_fields['name'] = $blockname . '-spacings-fields';

global $slider_fields;
$slider_fields['key']  = 'field_' . $blockname . '_sliderfields';
$slider_fields['name'] = $blockname . '-slider-fields';

$layouts[ $blockname ] = array(
	'order'      => 1,
	'key'        => 'layout_' . $blockname,
	'name'       => $blockname,
	'label'      => __( 'Hero', 'strl' ),
	'display'    => 'seamless',
	'sub_fields' => array(
		array(
			'key'   => 'field_' . $blockname . '_contenttab',
			'label' => __( 'Content', 'strl' ),
			'name'  => $blockname . '-contenttab',
			'type'  => 'tab',
		),
		array(
			'key'   => 'field_' . $blockname . '_pretitle',
			'label' => __( 'Pretitle', 'strl' ),
			'name'  => $blockname . '-pretitle',
			'type'  => 'text',
		),
		array(
			'key'   => 'field_' . $blockname . '_content',
			'label' => __( 'Content', 'strl' ),
			'name'  => $blockname . '-content',
			'type'  => 'wysiwyg',
		),
		array(
			'key'   => 'field_' . $blockname . '_stylingtab',
			'label' => __( 'Style', 'strl' ),
			'name'  => $blockname . '-stylingtab',
			'type'  => 'tab',
		),
		$styling_fields,
		array(
			'key'   => 'field_' . $blockname . '_spacingstab',
			'label' => __( 'Spacings', 'strl' ),
			'name'  => $blockname . '-spacingstab',
			'type'  => 'tab',
		),
		array(
			'key'     => 'field_' . $blockname . '_fullheight',
			'label'   => __( 'Set this blocks height equal to screen height (fullscreen)?', 'wtrc' ),
			'name'    => $blockname . '-full-height',
			'type'    => 'radio',
			'choices' => array(
				'no'  => __( 'No', 'wtrc' ),
				'yes' => __( 'Yes', 'wtrc' ),
			),
		),
		$spacings_fields,
		array(
			'key'   => 'field_' . $blockname . '_slidertab',
			'label' => __( 'Slider', 'strl' ),
			'name'  => '-slidertab',
			'type'  => 'tab',
		),
		$slider_fields,
	),
	'min'        => 'fas fa-cube',
);
