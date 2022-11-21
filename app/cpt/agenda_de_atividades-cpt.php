	<?php 
    // Register Custom Post Type Agenda de Atividades
function create_agendadeatividades_cpt() {

	$labels = array(
		'name' => _x( 'Agenda de Atividade', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Agenda de Atividades', 'Post Type Singular Name', 'textdomain' ),
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