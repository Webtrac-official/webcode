<?php
add_shortcode( 'btn', 'ctrl_button_primary_shortcode' );

function ctrl_button_primary_shortcode( $atts, $content ) {
	$args = shortcode_atts(
		array(
			'link'   => '',
			'type'   => '',
			'target' => '',
		),
		$atts,
	);

	$link   = $args['link'];
	$type   = $args['type'];
	$target = $args['target'];

	ob_start();
	?>
	<a href="<?php echo $link; ?>" class="btn <?php echo $type; ?>" target="<?php echo $target; ?>"><?php echo $content; ?></a>
	<?php
	return ob_get_clean();
}
