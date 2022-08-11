<?php 
// Register Custom Post Type Integrante
function create_integrante_cpt() {

	$labels = array(
		'name' => _x( 'Integrantes', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Integrante', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Integrantes', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Integrante', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Integrante Archives', 'textdomain' ),
		'attributes' => __( 'Integrante Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Integrante:', 'textdomain' ),
		'all_items' => __( 'All Integrantes', 'textdomain' ),
		'add_new_item' => __( 'Add New Integrante', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Integrante', 'textdomain' ),
		'edit_item' => __( 'Edit Integrante', 'textdomain' ),
		'update_item' => __( 'Update Integrante', 'textdomain' ),
		'view_item' => __( 'View Integrante', 'textdomain' ),
		'view_items' => __( 'View Integrantes', 'textdomain' ),
		'search_items' => __( 'Search Integrante', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Integrante', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Integrante', 'textdomain' ),
		'items_list' => __( 'Integrantes list', 'textdomain' ),
		'items_list_navigation' => __( 'Integrantes list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Integrantes list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Integrante', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessman',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'page-attributes', 'custom-fields'),
		'taxonomies' => array('category', 'post_tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'integrante', $args );

}
add_action( 'init', 'create_integrante_cpt', 0 );
?>