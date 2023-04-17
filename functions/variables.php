<?php
function my_custom_variables() {
	//general
	$site_layout             = get_field( 'site-layout', 'option' );
	$block_spacing_v_desktop = get_field( 'block-spacing-v-desktop', 'option' );
	$block_spacing_v_tablet  = get_field( 'block-spacing-v-tablet', 'option' );
	$block_spacing_v_mobile  = get_field( 'block-spacing-v-mobile', 'option' );
	$block_spacing_h_desktop = get_field( 'block-spacing-h-desktop', 'option' );
	$block_spacing_h_tablet  = get_field( 'block-spacing-h-tablet', 'option' );
	$block_spacing_h_mobile  = get_field( 'block-spacing-h-mobile', 'option' );

	//colors
	$color_primary    = get_field( 'primary-color', 'option' );
	$color_secondary  = get_field( 'secondary-color', 'option' );
	$color_black      = get_field( 'black-color', 'option' );
	$color_white      = get_field( 'white-color', 'option' );
	$color_extra_1    = get_field( 'extra-color-1', 'option' );
	$color_extra_2    = get_field( 'extra-color-2', 'option' );
	$color_extra_3    = get_field( 'extra-color-3', 'option' );
	$color_extra_4    = get_field( 'extra-color-4', 'option' );
	$background_color = get_field( 'background-color', 'option' );

	//typography
	$heading_font = get_field( 'heading-font', 'option' );
	$body_font    = get_field( 'body-font', 'option' );

	//menu
	$menu_font_family  = get_field( 'menu-font-family', 'option' );
	$menu_font_size    = get_field( 'menu-font-size', 'option' );
	$menu_line_height  = get_field( 'menu-line-height', 'option' );
	$menu_font_weight  = get_field( 'menu-font-weight', 'option' );
	$menu_font_style   = get_field( 'menu-font-style', 'option' );
	$menu_item_spacing = get_field( 'menu-item-spacing', 'option' );
	$menu_color        = get_field( 'menu-color', 'option' );
	$menu_color_active = get_field( 'menu-color-active', 'option' );

	//sticky menu
	$sticky_menu_color           = get_field( 'sticky-menu-color', 'option' );
	$sticky_menu_color_active    = get_field( 'sticky-menu-color-active', 'option' );
	$sticky_header_color         = get_field( 'sticky-header-color', 'option' );
	$sticky_header_color_opacity = get_field( 'sticky-header-color-opacity', 'option' );

	//h1
	$h1 = get_field( 'h1-group', 'option' );
	if ( ! empty( $h1['font-family'] ) ) {
		$h1_font_family = $h1['font-family'];
	} else {
		$h1_font_family = $heading_font;
	}
	$h1_font_size     = $h1['font-size'];
	$h1_line_height   = $h1['line-height'];
	$h1_font_weight   = $h1['font-weight'];
	$h1_font_style    = $h1['font-style'];
	$h1_margin_bottom = $h1['margin-bottom'];

	//h2
	$h2 = get_field( 'h2-group', 'option' );
	if ( ! empty( $h2['font-family'] ) ) {
		$h2_font_family = $h2['font-family'];
	} else {
		$h2_font_family = $heading_font;
	}
	$h2_font_size     = $h2['font-size'];
	$h2_line_height   = $h2['line-height'];
	$h2_font_weight   = $h2['font-weight'];
	$h2_font_style    = $h2['font-style'];
	$h2_margin_bottom = $h2['margin-bottom'];

	//h3
	$h3 = get_field( 'h3-group', 'option' );
	if ( ! empty( $h3['font-family'] ) ) {
		$h3_font_family = $h3['font-family'];
	} else {
		$h3_font_family = $heading_font;
	}
	$h3_font_size     = $h3['font-size'];
	$h3_line_height   = $h3['line-height'];
	$h3_font_weight   = $h3['font-weight'];
	$h3_font_style    = $h3['font-style'];
	$h3_margin_bottom = $h3['margin-bottom'];

	//h4
	$h4 = get_field( 'h4-group', 'option' );
	if ( ! empty( $h4['font-family'] ) ) {
		$h4_font_family = $h4['font-family'];
	} else {
		$h4_font_family = $heading_font;
	}
	$h4_font_size     = $h4['font-size'];
	$h4_line_height   = $h4['line-height'];
	$h4_font_weight   = $h4['font-weight'];
	$h4_font_style    = $h4['font-style'];
	$h4_margin_bottom = $h4['margin-bottom'];

	//h5
	$h5 = get_field( 'h5-group', 'option' );
	if ( ! empty( $h5['font-family'] ) ) {
		$h5_font_family = $h5['font-family'];
	} else {
		$h5_font_family = $heading_font;
	}
	$h5_font_size     = $h5['font-size'];
	$h5_line_height   = $h5['line-height'];
	$h5_font_weight   = $h5['font-weight'];
	$h5_font_style    = $h5['font-style'];
	$h5_margin_bottom = $h5['margin-bottom'];

	//h6
	$h6 = get_field( 'h6-group', 'option' );
	if ( ! empty( $h6['font-family'] ) ) {
		$h6_font_family = $h6['font-family'];
	} else {
		$h6_font_family = $heading_font;
	}
	$h6_font_size     = $h6['font-size'];
	$h6_line_height   = $h6['line-height'];
	$h6_font_weight   = $h6['font-weight'];
	$h6_font_style    = $h6['font-style'];
	$h6_margin_bottom = $h6['margin-bottom'];

	//h6
	$p               = get_field( 'p-group', 'option' );
	$p_font_size     = $p['font-size'];
	$p_line_height   = $p['line-height'];
	$p_font_weight   = $p['font-weight'];
	$p_font_style    = $p['font-style'];
	$p_margin_bottom = $p['margin-bottom'];

	//span
	$span = get_field( 'span-group', 'option' );
	if ( ! empty( $span['font-family'] ) ) {
		$span_font_family = $span['font-family'];
	} else {
		$span_font_family = $body_font;
	}
	$span_font_size     = $span['font-size'];
	$span_line_height   = $span['line-height'];
	$span_font_weight   = $span['font-weight'];
	$span_font_style    = $span['font-style'];
	$span_margin_bottom = $span['margin-bottom'];

	if ( ! is_admin() ) {
		?>
		<style>
			:root{
				--global--site-layout: <?php echo $site_layout . 'px'; ?>;
				--global--block-spacing-v-desktop: <?php echo $block_spacing_v_desktop . 'px'; ?>;
				--global--block-spacing-v-tablet: <?php echo $block_spacing_v_tablet . 'px'; ?>;
				--global--block-spacing-v-mobile: <?php echo $block_spacing_v_mobile . 'px'; ?>;
				--global--block-spacing-h-desktop: <?php echo $block_spacing_h_desktop . 'px'; ?>;
				--global--block-spacing-h-tablet: <?php echo $block_spacing_h_tablet . 'px'; ?>;
				--global--block-spacing-h-mobile: <?php echo $block_spacing_h_mobile . 'px'; ?>;

				--global--color-primary: <?php echo $color_primary; ?>;
				--global--color-secondary: <?php echo $color_secondary; ?>;
				--global--color-black: <?php echo $color_black; ?>;
				--global--color-white: <?php echo $color_white; ?>;
				--global--color-extra-1: <?php echo $color_extra_1; ?>;
				--global--color-extra-2: <?php echo $color_extra_2; ?>;
				--global--color-extra-3: <?php echo $color_extra_3; ?>;
				--global--color-extra-4: <?php echo $color_extra_4; ?>;
				--global--color-extra-4: <?php echo $color_extra_4; ?>;
				--global--background-color: <?php echo $background_color; ?>;

				--global--heading-font: <?php echo $heading_font; ?>, serif;
				--global--body-font: <?php echo $body_font; ?>, serif;

				--global--menu-font-family: <?php echo $menu_font_family; ?>, serif;
				--global--menu-font-size: <?php echo $menu_font_size . 'px'; ?>;
				--global--menu-line-height: <?php echo $menu_line_height . 'px'; ?>;
				--global--menu-font-weight: <?php echo $menu_font_weight; ?>;
				--global--menu-font-style: <?php echo $menu_font_style; ?>;
				--global--menu-item-spacing: <?php echo $menu_item_spacing . 'px'; ?>;
				--global--menu-color: <?php echo $menu_color; ?>;
				--global--menu-color-active: <?php echo $menu_color_active; ?>;

				--global--menu-sticky-color: <?php echo $sticky_menu_color; ?>;
				--global--menu-sticky-color-active: <?php echo $sticky_menu_color_active; ?>;
				--global--menu-sticky-background-color: <?php echo $sticky_header_color; ?>;
				--global--menu-sticky-background-color-opacity: <?php echo $sticky_header_color_opacity; ?>;

				--global--h1-font-family: <?php echo $h1_font_family; ?>;
				--global--h1-font-size: <?php echo $h1_font_size . 'px'; ?>;
				--global--h1-line-height: <?php echo $h1_line_height . 'px'; ?>;
				--global--h1-font-weight: <?php echo $h1_font_weight; ?>;
				--global--h1-font-style: <?php echo $h1_font_style; ?>;
				--global--h1-margin-bottom: <?php echo $h1_margin_bottom . 'px'; ?>;

				--global--h2-font-family: <?php echo $h2_font_family; ?>;
				--global--h2-font-size: <?php echo $h2_font_size . 'px'; ?>;
				--global--h2-line-height: <?php echo $h2_line_height . 'px'; ?>;
				--global--h2-font-weight: <?php echo $h2_font_weight; ?>;
				--global--h2-font-style: <?php echo $h2_font_style; ?>;
				--global--h2-margin-bottom: <?php echo $h2_margin_bottom . 'px'; ?>;

				--global--h3-font-family: <?php echo $h3_font_family; ?>;
				--global--h3-font-size: <?php echo $h3_font_size . 'px'; ?>;
				--global--h3-line-height: <?php echo $h3_line_height . 'px'; ?>;
				--global--h3-font-weight: <?php echo $h3_font_weight; ?>;
				--global--h3-font-style: <?php echo $h3_font_style; ?>;
				--global--h3-margin-bottom: <?php echo $h3_margin_bottom . 'px'; ?>;

				--global--h4-font-family: <?php echo $h4_font_family; ?>;
				--global--h4-font-size: <?php echo $h4_font_size . 'px'; ?>;
				--global--h4-line-height: <?php echo $h4_line_height . 'px'; ?>;
				--global--h4-font-weight: <?php echo $h4_font_weight; ?>;
				--global--h4-font-style: <?php echo $h4_font_style; ?>;
				--global--h4-margin-bottom: <?php echo $h4_margin_bottom . 'px'; ?>;

				--global--h5-font-family: <?php echo $h5_font_family; ?>;
				--global--h5-font-size: <?php echo $h5_font_size . 'px'; ?>;
				--global--h5-line-height: <?php echo $h5_line_height . 'px'; ?>;
				--global--h5-font-weight: <?php echo $h5_font_weight; ?>;
				--global--h5-font-style: <?php echo $h5_font_style; ?>;
				--global--h5-margin-bottom: <?php echo $h5_margin_bottom . 'px'; ?>;

				--global--h6-font-family: <?php echo $h6_font_family; ?>;
				--global--h6-font-size: <?php echo $h6_font_size . 'px'; ?>;
				--global--h6-line-height: <?php echo $h6_line_height . 'px'; ?>;
				--global--h6-font-weight: <?php echo $h6_font_weight; ?>;
				--global--h6-font-style: <?php echo $h6_font_style; ?>;
				--global--h6-margin-bottom: <?php echo $h6_margin_bottom . 'px'; ?>;

				--global--p-font-size: <?php echo $p_font_size . 'px'; ?>;
				--global--p-line-height: <?php echo $p_line_height . 'px'; ?>;
				--global--p-font-weight: <?php echo $p_font_weight; ?>;
				--global--p-font-style: <?php echo $p_font_style; ?>;
				--global--p-margin-bottom: <?php echo $p_margin_bottom . 'px'; ?>;

				--global--span-font-family: <?php echo $span_font_family; ?>;
				--global--span-font-size: <?php echo $span_font_size . 'px'; ?>;
				--global--span-line-height: <?php echo $span_line_height . 'px'; ?>;
				--global--span-font-weight: <?php echo $span_font_weight; ?>;
				--global--span-font-style: <?php echo $span_font_style; ?>;
				--global--span-margin-bottom: <?php echo $span_margin_bottom . 'px'; ?>;
			}
		</style>
		<?php
	}
}
