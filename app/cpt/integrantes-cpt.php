<?php 
//create ano_saida taxonomy
function create_ano_saida_taxonomy() {
$labels = array(
'name' => _x( 'Ano de Saída', 'taxonomy general name' ),
'singular_name' => _x( 'Ano de Saída', 'taxonomy singular name' ),
);
$args = array(
'hierarchical' => true,
'labels' => $labels,
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'ano_saida' ),
);
register_taxonomy( 'ano_saida', array( 'integrante' ), $args );
}
add_action( 'init', 'create_ano_saida_taxonomy' );
//create integrante custom post type
function create_integrante_cpt() {
$labels = array(
'name' => _x( 'Integrantes', 'Post Type General Name', 'text_domain' ),
'singular_name' => _x( 'Integrante', 'Post Type Singular Name', 'text_domain' ),
'menu_name' => __( 'Integrantes', 'text_domain' ),
'name_admin_bar' => __( 'Integrante', 'text_domain' ),
);
$args = array(
'label' => __( 'Integrante', 'text_domain' ),
'description' => __( 'Integrantes information page.', 'text_domain' ),
'labels' => $labels,
'menu_icon' => 'dashicons-groups',
'supports' => array( 'title', 'editor', 'thumbnail'),
'taxonomies' => array( 'ano_saida' ),
'hierarchical' => false,
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_position' => 5,
'show_in_admin_bar' => true,
'show_in_nav_menus' => true,
'can_export' => true,
'has_archive' => true,
'exclude_from_search' => false,
'publicly_queryable' => true,
'capability_type' => 'page',
);
register_post_type( 'integrante', $args );
}
add_action( 'init', 'create_integrante_cpt');