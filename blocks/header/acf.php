<?php
$blockname = 'header';

global $styling_fields;
$styling_fields['key']  = 'field_' . $blockname . '_stylingfields';
$styling_fields['name'] = $blockname . '-styling-fields';

global $spacings_fields;
$spacings_fields['key']  = 'field_' . $blockname . '_spacingsfields';
$spacings_fields['name'] = $blockname . '-spacings-fields';

$layouts[ $blockname ] = array(
	'order'      => 1,
	'key'        => 'layout_' . $blockname,
	'name'       => $blockname,
	'label'      => __( 'Header', 'strl' ),
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
			'key'   => 'field_' . $blockname . '_content2',
			'label' => __( 'Content', 'strl' ),
			'name'  => $blockname . '-content2',
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
		$spacings_fields,
	),
	'min'        => 'fas fa-cube',
);
