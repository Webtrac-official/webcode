<?php
get_header();

$page_width = get_field( 'site_layout', 'option' );
?>

<main class="w_main" id="<?php echo $page_width; ?>">
	<?php
	while ( have_posts() ) {
		the_post();
		if ( have_rows( 'blocks' ) ) {
			while ( have_rows( 'blocks' ) ) {
				the_row();
				$rowlayout = get_row_layout();
				get_template_part( "blocks/${rowlayout}/${rowlayout}", null );
			}
		}
	}
	?>
</main>
<?php
get_footer();
