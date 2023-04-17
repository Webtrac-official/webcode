<?php
$blockname = basename( __FILE__, '.php' );
$prefix    = $blockname . '-';

//content
$pretitle = get_sub_field( $prefix . 'pretitle' );
$content  = get_sub_field( $prefix . 'content' );

//importing fields
$styling = get_sub_field( $prefix . 'styling-fields' );
$spacing = get_sub_field( $prefix . 'spacings-fields' );
$slider  = get_sub_field( $prefix . 'slider-fields' );

//style
$background = $styling['background'];
$bg_color   = $styling['background-color'];
$bg_image   = wp_get_attachment_image_url( $styling['background-image'], 'full' );
$overlay_c  = $styling['background-overlay-color'];
$overlay_o  = $styling['background-overlay-opacity'];
$heading_c  = $styling['heading-color'];
$bodytext_c = $styling['bodytext-color'];
$link_c     = $styling['link-color'];

//spacing
$full_height       = get_sub_field( $prefix . 'full-height' );
$full_width        = $spacing['full-width'];
$padding_t_desktop = $spacing['padding-top-desktop'];
$padding_b_desktop = $spacing['padding-bottom-desktop'];
$padding_l_desktop = $spacing['padding-left-desktop'];
$padding_r_desktop = $spacing['padding-right-desktop'];
$padding_t_tablet  = $spacing['padding-top-tablet'];
$padding_b_tablet  = $spacing['padding-bottom-tablet'];
$padding_l_tablet  = $spacing['padding-left-tablet'];
$padding_r_tablet  = $spacing['padding-right-tablet'];
$padding_t_mobile  = $spacing['padding-top-mobile'];
$padding_b_mobile  = $spacing['padding-bottom-mobile'];
$padding_l_mobile  = $spacing['padding-left-mobile'];
$padding_r_mobile  = $spacing['padding-right-mobile'];
$section_spacing_d = ( ! empty( $padding_t_desktop ) ? 'padding-top:' . $padding_t_desktop . 'px;' : '' ) . ( ! empty( $padding_b_desktop ) ? 'padding-bottom:' . $padding_b_desktop . 'px;' : '' ) . ( ! empty( $padding_l_desktop ) ? 'padding-left:' . $padding_l_desktop . 'px;' : '' ) . ( ! empty( $padding_r_desktop ) ? 'padding-right:' . $padding_r_desktop . 'px;' : '' );
$section_spacing_t = ( ! empty( $padding_t_tablet ) ? 'padding-top:' . $padding_t_tablet . 'px;' : '' ) . ( ! empty( $padding_b_tablet ) ? '@media only screen and (min-width: 767px) and (max-width: 1024px){ padding-bottom:' . $padding_b_tablet . 'px; }' : '' ) . ( ! empty( $padding_l_tablet ) ? '@media only screen and (min-width: 767px) and (max-width: 1024px){ padding-left:' . $padding_l_tablet . 'px; }' : '' ) . ( ! empty( $padding_r_tablet ) ? '@media only screen and (min-width: 767px) and (max-width: 1024px){ padding-right:' . $padding_r_tablet . 'px; }' : '' );
$section_spacing_m = ( ! empty( $padding_t_mobile ) ? 'padding-top:' . $padding_t_mobile . 'px;' : '' ) . ( ! empty( $padding_b_mobile ) ? '@media only screen and (max-width: 767px){ padding-bottom:' . $padding_b_mobile . 'px; }' : '' ) . ( ! empty( $padding_l_mobile ) ? '@media only screen and (max-width: 767px){ padding-left:' . $padding_l_mobile . 'px; }' : '' ) . ( ! empty( $padding_r_mobile ) ? '@media only screen and (max-width: 767px){ padding-right:' . $padding_r_mobile . 'px; }' : '' );
$section_spacing   = $section_spacing_d . $section_spacing_t . $section_spacing_m;

//slider
$bg_slider   = $slider['background-slider'];
$animation   = $slider['animation-select'];
$animation_s = $slider['animation-speed'];
$animation_l = $slider['animation-loop'];
$animation_a = $slider['animation-autoplay'];

?>
<section class="<?php echo $blockname . ( 'yes' === $full_width ? ' full-width' : '' ) . ( 'yes' === $full_height ? ' full-height' : '' ); ?>">
	<style>
		<?php echo '.' . $blockname; ?> h1, <?php echo '.' . $blockname; ?> h2, <?php echo '.' . $blockname; ?> h3, <?php echo '.' . $blockname; ?> h4, <?php echo '.' . $blockname; ?> h5, <?php echo '.' . $blockname; ?> h6{
			color: <?php echo $heading_c; ?>;
		}

		<?php echo '.' . $blockname; ?> p, li, span{
			color: <?php echo $bodytext_c; ?>;
		}

		<?php echo '.' . $blockname; ?> a:not(.btn){
			color: <?php echo $link_c; ?>;
		}

		<?php echo '.' . $blockname; ?> a:not(.btn)::after{
			background-color: <?php echo $link_c; ?>;
		}

		section.<?php echo $blockname; ?>{
			<?php echo ( ! empty( $padding_t_desktop ) ? 'padding-top:' . $padding_t_desktop . 'px!important;' : '' ) ?>
			<?php echo ( ! empty( $padding_b_desktop ) ? 'padding-bottom:' . $padding_b_desktop . 'px!important;' : '' ) ?>
			<?php echo ( ! empty( $padding_l_desktop ) ? 'padding-left:' . $padding_l_desktop . 'px!important;' : '' ) ?>
			<?php echo ( ! empty( $padding_r_desktop ) ? 'padding-right:' . $padding_r_desktop . 'px!important;' : '' ) ?>
		}

		@media only screen and (min-width: 767px) and (max-width: 1024px){
			section.<?php echo $blockname; ?>{
				<?php echo ( ! empty( $padding_t_tablet ) ? 'padding-top:' . $padding_t_tablet . 'px!important;' : '' ) ?>
				<?php echo ( ! empty( $padding_b_tablet ) ? 'padding-bottom:' . $padding_b_tablet . 'px!important;' : '' ) ?>
				<?php echo ( ! empty( $padding_l_tablet ) ? 'padding-left:' . $padding_l_tablet . 'px!important;' : '' ) ?>
				<?php echo ( ! empty( $padding_r_tablet ) ? 'padding-right:' . $padding_r_tablet . 'px!important;' : '' ) ?>
			}
		}

		@media only screen and (max-width: 767px){
			section.<?php echo $blockname; ?>{
				<?php echo ( ! empty( $padding_t_mobile ) ? 'padding-top:' . $padding_t_mobile . 'px!important;' : '' ) ?>
				<?php echo ( ! empty( $padding_b_mobile ) ? 'padding-bottom:' . $padding_b_mobile . 'px!important;' : '' ) ?>
				<?php echo ( ! empty( $padding_l_mobile ) ? 'padding-left:' . $padding_l_mobile . 'px!important;' : '' ) ?>
				<?php echo ( ! empty( $padding_r_mobile ) ? 'padding-right:' . $padding_r_mobile . 'px!important;' : '' ) ?>
			}
		}
	</style>
	<?php
	if ( 'color' === $background ) {
		?>
		<div class="background" style="background-color: <?php echo $bg_color; ?>"></div>
		<?php
	} elseif ( 'image' === $background ) {
		?>
		<div class="background" style="background-image: url(<?php echo $bg_image; ?>)">
			<div class="overlay" style="background-color: <?php echo $overlay_c; ?>; opacity: <?php echo $overlay_o / 100 ?>;"></div>
		</div>
		<?php
	} elseif ( 'slider' === $background ) {
		?>
		<div class="swiper <?php echo $animation . ' ' . $animation_s; ?> <?php echo ( '1' === $animation_l ) ? 'loop' : ''; ?> <?php echo ( ! empty( $animation_a ) ) ? 'autoplay' . ' ' . $animation_a : ''; ?>">
			<div class="swiper-wrapper">
				<?php foreach ( $bg_slider as $slide ) { ?>
					<div class="swiper-slide">
						<div class="image">
							<?php echo wp_get_attachment_image( $slide, 'full' ); ?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="overlay" style="background-color: <?php echo $overlay_c; ?>; opacity: <?php echo $overlay_o / 100 ?>;"></div>
		</div>
		<!-- <div class="swiper-pagination"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div> -->
		<?php
	}
	?>
	<div class="container">
		<div class="row">
			<div class="small-12 medium-12 large-12">
				<div class="content">
					<?php if ( ! empty( $pretitle ) ) { ?>
						<span class="pretitle"><?php echo $pretitle; ?></span>
					<?php } ?>
					<?php if ( ! empty( $content ) ) { ?>
						<div class="text"><?php echo $content; ?></div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
