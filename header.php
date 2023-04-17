<?php
$header_layout      = get_field( 'header-layout', 'option' );
$vertical_padding   = get_field( 'header-padding-v', 'option' ) . 'px';
$horizontal_padding = get_field( 'header-padding-h', 'option' ) . 'px';
$logo               = get_field( 'site-logo', 'option' );
$sticky_header      = get_field( 'sticky-header', 'option' );
$sticky_logo        = get_field( 'site-logo-sticky', 'option' );
$logo_height        = get_field( 'logo-height', 'option' ) . 'px';
$header_color       = get_field( 'header-color', 'option' );
$header_opacity     = get_field( 'header-color-opacity', 'option' );
$header_rgba        = list( $r, $g, $b ) = sscanf( $header_color, "#%02x%02x%02x" );

?>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="<?php echo ( ! empty( $sticky_header ) ? 'sticky' : '' ); ?>">
		<div class="wtrc-header <?php echo $header_layout; ?>" style="padding: <?php echo $vertical_padding . ' ' . $horizontal_padding; ?>; <?php echo ( ! empty( $header_rgba ) ? 'background-color: rgba(' . $r . ', ' . $g . ', ' . $b . ', ' . $header_opacity / 100 . ');' : '' ); ?>">
			<div class="header-content">
				<div class="wtrc-logo">
					<?php
					if ( ! empty( $logo ) ) {
						?>
						<a class="logo" href="/">
							<img src="<?php echo wp_get_attachment_image_url( $logo, 'full' ); ?>" alt="" style="max-height: <?php echo $logo_height; ?>; width: auto;">
						</a>
						<?php
					} else {
						?>
						<h2 class="site-title"><?php echo bloginfo( 'name' ); ?></h2>
						<?php
					}
					if ( ! empty( $sticky_logo ) ) {
						?>
						<a class="sticky-logo" href="/">
							<img src="<?php echo wp_get_attachment_image_url( $sticky_logo, 'full' ); ?>" alt="" style="max-height: <?php echo $logo_height; ?>; width: auto;">
						</a>
						<?php
					} else {
						?>
						<h2 class="site-title"><?php echo bloginfo( 'name' ); ?></h2>
						<?php
					}
					?>
				</div>
				<div class="wtrc-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary_menu',
						)
					);
					?>
				</div>
			</div>
		</div>
		<?php
		$fonts = get_field( 'google-fonts', 'options' );

		if ( $fonts ) {
			?>
			<style>
				<?php
				foreach ( $fonts as $font ) {
					?>
					<?php echo $font['link']; ?>
					<?php
				}
				?>
			</style>
			<?php
		}
		?>
	</header>
