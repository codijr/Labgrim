<?php
function create_type_taxonomy() {
$labels = array(
'name'              => _x( 'Tipos', 'taxonomy general name' ),
'singular_name'     => _x( 'Tipo', 'taxonomy singular name' ),
);
$args = array(
'hierarchical'      => true,
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true,
'rewrite'           => array( 'slug' => 'tipo' ),
);
register_taxonomy( 'tipo', array( 'producao' ), $args );
}
add_action( 'init', 'create_type_taxonomy' );
function create_producao_cpt() {
$labels = array(
'name'                  => _x( 'Produções', 'Post Type General Name', 'text_domain' ),
'singular_name'         => _x( 'Produção', 'Post Type Singular Name', 'text_domain' ),
'menu_name'             => __( 'Produções', 'text_domain' ),
'name_admin_bar'        => __( 'Produção', 'text_domain' ),
);
$args = array(
'label'                 => __( 'Produção', 'text_domain' ),
'description'           => __( 'Produções information page.', 'text_domain' ),
'labels' => $labels,
'menu_icon' => 'dashicons-format-video',
'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
'taxonomies'            => array( 'tipo' ),
'hierarchical'          => false,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'page',
);
register_post_type( 'producao', $args );
}
add_action( 'init', 'create_producao_cpt');
?>