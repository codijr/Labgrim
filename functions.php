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
        wp_enqueue_style('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css');

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
        wp_enqueue_style('card-senior-researcher', get_template_directory_uri().'/assets/styles/components/card-senior-researcher.css', array(),'1.0.0', 'all');
        wp_enqueue_style('card-researcher', get_template_directory_uri().'/assets/styles/components/card-researcher.css', array(),'1.0.0', 'all');
        wp_enqueue_style('card-ex-researcher', get_template_directory_uri().'/assets/styles/components/card-ex-researcher.css', array(),'1.0.0', 'all');
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

        if(is_page('integrantes')) {
            wp_enqueue_style('integrantes', get_template_directory_uri().'/assets/styles/page-integrantes.css', array(),'1.0.0', 'all');
        }
    }
    add_action('wp_enqueue_scripts', 'css_files');

    function scripts_files() {
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', false, null, false); 
        wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js', array('jquery'));
        wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js', array('popper'));
        wp_enqueue_script('bootstrap-select', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js', array('jquery'));
        wp_enqueue_script('swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
        wp_enqueue_script( 'swiperinit', get_template_directory_uri() . '/assets/scripts/swiper-init.js', array(), '8.0.7', true );

        wp_enqueue_script('header', get_template_directory_uri() . '/assets/scripts/header.js');
    }
    add_action('wp_enqueue_scripts', 'scripts_files'); 

    //Custom Post Types
    require_once(get_template_directory().'/app/cpt/noticias-cpt.php');
    require_once(get_template_directory().'/app/cpt/producoes-cpt.php');
    require_once(get_template_directory().'/app/cpt/agenda_de_atividades-cpt.php');
    require_once(get_template_directory().'/app/cpt/integrantes-cpt.php');

    //função para fazer componentização
    function includeFile($fileName, $variables) {
        extract($variables);
        include($fileName);
    }

    // Suporte para o search-form
    add_theme_support( 'html5', array( 'search-form' ) );

    // Customização do search-form padrão (não utilizado)
    function custom_search_form( $form ) {
        // search-form personalizado
        $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
                <div class="d-flex align-items-center" >
                    <input class="w-100" type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Pesquisar">
                    <input type="hidden" name="site_section" value="noticias" />
                    <button class="d-flex justify-content-center algin-items-center" type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M19.0004 19L14.6504 14.65" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </form>';

         // search-form padrão  
        $form2 = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
            <div class="custom-form"><label class="screen-reader-text" for="s">' . __( 'Search:' ) . '</label>
            <input type="text" value="' . get_search_query() . '" name="s" id="s" />
            <input type="hidden" name="site_section" value="noticias" />
            <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
        </div>
        </form>';

      return $form;
    }
    add_filter( 'get_search_form', 'custom_search_form', 40 );
?>