<?php
function create_noticias_cpt() {
$labels = array(
'name'                  => _x( 'Notícias', 'Post Type General Name', 'text_domain' ),
'singular_name'         => _x( 'Notícia', 'Post Type Singular Name', 'text_domain' ),
);
$args = array(
'label'                 => __( 'Notícia', 'text_domain' ),
'description'           => __( 'Descrição da notícia	', 'text_domain' ),
'labels'                => $labels,
'menu_icon' => 'dashicons-welcome-widgets-menus',
'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'author'),
'taxonomies'            => array( 'category' ),
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
register_post_type( 'noticia', $args );
}
add_action( 'init', 'create_noticias_cpt');
?>