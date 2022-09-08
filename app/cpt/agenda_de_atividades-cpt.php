	<?php 
    // Register Custom Post Type Agenda de Atividades
function create_agendadeatividades_cpt() {

	$labels = array(
		'name' => _x( 'Agenda de Atividade', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Agenda de Atividades', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Agenda de Atividade', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Agenda de Atividades', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Agenda de Atividades Archives', 'textdomain' ),
		'attributes' => __( 'Agenda de Atividades Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent Agenda de Atividades:', 'textdomain' ),
		'all_items' => __( 'All Agenda de Atividade', 'textdomain' ),
		'add_new_item' => __( 'Add New Agenda de Atividades', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New Agenda de Atividades', 'textdomain' ),
		'edit_item' => __( 'Edit Agenda de Atividades', 'textdomain' ),
		'update_item' => __( 'Update Agenda de Atividades', 'textdomain' ),
		'view_item' => __( 'View Agenda de Atividades', 'textdomain' ),
		'view_items' => __( 'View Agenda de Atividade', 'textdomain' ),
		'search_items' => __( 'Search Agenda de Atividades', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Agenda de Atividades', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Agenda de Atividades', 'textdomain' ),
		'items_list' => __( 'Agenda de Atividade list', 'textdomain' ),
		'items_list_navigation' => __( 'Agenda de Atividade list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Agenda de Atividade list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Agenda de Atividades', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'author', 'page-attributes', 'custom-fields'),
		'taxonomies' => array(),
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
	register_post_type( 'agendadeatividades', $args );

}
add_action( 'init', 'create_agendadeatividades_cpt');
?>