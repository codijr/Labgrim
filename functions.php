<?php 
    // Função para configurar o tema
    function theme_setup(){
        add_theme_support('post-thumbnails');

        add_theme_support('title-tag');

        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_footer_menu' => 'Footer Menu'
            )
        );
    }
    add_action('after_setup_theme','theme_setup');

    function css_files() {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
        wp_enqueue_style('bootstrap-select', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css');

        //fonts
        wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', array(), '1.0.0', 'all');

        //global styles
        wp_enqueue_style('global', get_template_directory_uri().'/assets/styles/global.css', array(),'1.0.0', 'all');
        wp_enqueue_style('header', get_template_directory_uri().'/assets/styles/header.css', array(),'1.0.0', 'all');
        wp_enqueue_style('footer', get_template_directory_uri().'/assets/styles/footer.css', array(),'1.0.0', 'all');

        //components
        wp_enqueue_style('card-production', get_template_directory_uri().'/assets/styles/components/card-production.css', array(),'1.0.0', 'all');
        wp_enqueue_style('card-news', get_template_directory_uri().'/assets/styles/components/card-news.css', array(),'1.0.0', 'all');
        wp_enqueue_style('card-schedule', get_template_directory_uri().'/assets/styles/components/card-schedule.css', array(),'1.0.0', 'all');
        wp_enqueue_style('card-schedule-home', get_template_directory_uri().'/assets/styles/components/card-schedule-home.css', array(),'1.0.0', 'all');

        //pages styles
        if(is_front_page()) {
            wp_enqueue_style('front-page', get_template_directory_uri().'/assets/styles/front-page.css', array(),'1.0.0', 'all');
        }

        if(is_page('noticias')) {
            wp_enqueue_style('noticias', get_template_directory_uri().'/assets/styles/page-noticias.css', array(),'1.0.0', 'all');
        }

        if(is_page('producoes')) {
            wp_enqueue_style('producoes', get_template_directory_uri().'/assets/styles/page-producoes.css', array(),'1.0.0', 'all');
        }

        if(is_page('agenda')) {
            wp_enqueue_style('agenda', get_template_directory_uri().'/assets/styles/page-agenda.css', array(),'1.0.0', 'all');
        }
    }
    add_action('wp_enqueue_scripts', 'css_files');

    function scripts_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
        wp_enqueue_script('bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js', array('jquery'));

        wp_enqueue_script('header', get_template_directory_uri() . '/assets/scripts/header.js');
    }
    add_action('wp_enqueue_scripts', 'scripts_files'); 

    //função para fazer componentização
    function includeFile($fileName, $variables) {
        extract($variables);
        include($fileName);
    }
?>