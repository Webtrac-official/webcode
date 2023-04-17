<?php
add_action( 'init', 'wtrc_scripts' );
add_action( 'wp_enqueue_scripts', 'wtrc_disable_gutenberg' );

add_action( 'main', 'wtrc_admin_bar_fix' );
add_action( 'init', 'wtrc_remove_page_editor' );
add_action( 'init', 'wtrc_add_primary_menu' );
add_action( 'admin_menu', 'remove_posts_menu' );
add_action( 'acf/init', 'my_acf_op_init' );
add_action( 'init', 'custom_post_type' );
add_action( 'wp_before_admin_bar_render', 'remove_comments' );
add_action( 'admin_menu', 'my_remove_admin_menus' );
add_action( 'init', 'webcode_add_blocks' );
add_action( 'init', 'my_custom_variables' );

do_action( 'wp_enqueue_scripts' );
do_action( 'main' );

//enqueue scripts and styles
function wtrc_scripts() {
	wp_register_style( 'style', get_template_directory_uri() . '/dist/css/bundle.css', array(), 1, 'all' );
	wp_enqueue_style( 'style' );
	wp_enqueue_script( 'jquery' );
	wp_register_script( 'script', get_template_directory_uri() . '/dist/js/bundle.js', array( 'jquery' ), 1, true );
	wp_enqueue_script( 'script' );
	// wp_register_script('acfe-input', get_template_directory_uri() . '/dist/js/acfe-input.min.js', array('acf-input'), '1.0', true);
	// wp_enqueue_script('acfe-input');
}

//fix admin bar spacing
function wtrc_admin_bar_fix() {
	if ( is_admin_bar_showing() && ! is_admin() ) {
		echo '<style type="text/css" media="screen">
			html { margin-top: 32px !important; }
			* html body { margin-top: 32px !important; }
		</style>';
	}
}

//disable Gutenberg
function wtrc_disable_gutenberg() {
	wp_dequeue_script( 'wp-block-library' );
	wp_dequeue_script( 'wp-block-library-theme' );
	wp_dequeue_script( 'wc-blocks' );
	wp_dequeue_script( 'wc-blocks-vendors' );
	wp_dequeue_style( 'wc-blocks-vendors' );
	wp_dequeue_style( 'wc-blocks' );
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
}

//remove standards from page and cpt
function wtrc_remove_page_editor() {
	remove_post_type_support( 'page', 'editor' );
	remove_post_type_support( 'page', 'page-attributes' );
	remove_post_type_support( 'page', 'author' );
}

//remove standards from page and cpt
function wtrc_add_primary_menu() {
	register_nav_menu( 'primary_menu', __( 'Primary menu' ) );
}

//remove posts from admin menu
function remove_posts_menu() {
	remove_menu_page( 'edit.php' );
}

//remove unnecessary fields from top admin bar
function remove_comments() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'comments' );
	$wp_admin_bar->remove_menu( 'updates' );
	$wp_admin_bar->remove_menu( 'customize' );
}

//remove unnecessary fields from backend admin bar
function my_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'tools.php' );
}
