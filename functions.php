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

    // Adicionando script AJAX
    function filter_producoes() {
        wp_enqueue_script( 'filter-producoes', get_template_directory_uri() . '/assets/scripts/filter-producoes.js', array( 'jquery' ), '1.0.0', true );
    }
    function filter_agendadeatividades() {
        wp_enqueue_script( 'filter-agendadeatividades', get_template_directory_uri() . '/assets/scripts/filter-agendadeatividades.js', array( 'jquery' ), '1.0.0', true );
    }
    add_action( 'wp_enqueue_scripts', 'filter_producoes' );
    add_action( 'wp_enqueue_scripts', 'filter_agendadeatividades' );

    
    // Filtro AJAX para Produções
    function producoes_filter_function(){
        $args = array(
            'post_type' => 'producao'
        );
        
        // filtra por categoria
        if(  isset( $_POST['categoryfilter'] ) && !empty( $_POST['categoryfilter'] )  )
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'category',
				    'field' => 'id',
				    'terms' => $_POST['categoryfilter']
                )
            );
        
        // filtra por ano
        if( isset( $_POST['yearfilter'] ) && !empty( $_POST['yearfilter'] ) )
            $args['date_query'] = array(
                array(
                    'year'  => $_POST['yearfilter'],
                )
            );
        
        
        $query = new WP_Query( $args );
        
        if( $query->have_posts() ) :
            while( $query->have_posts() ): $query->the_post();
                echo "<div class='col-12 col-lg-4'>";
                includeFile('components/card-production.php', array(
                    'image' =>  get_the_post_thumbnail_url(),
                    'category' => get_the_category( $id )[0]->name ,
                    'title' => get_the_title(),
                    'subtitle' => get_the_content()
                ));
                echo "</div>";
            endwhile;
            wp_reset_postdata();
        else :
            echo 'Nada encontrado';
        endif;
        
        die();
    }
    add_action('wp_ajax_producaofilter', 'producoes_filter_function');
    add_action('wp_ajax_nopriv_producaofilter', 'producoes_filter_function');

    function agendadeatividades_filter_function(){
        $args = array(
            'post_type' => 'agendadeatividades'
        );

        if( isset($_POST['monthfilter']) && !empty($_POST['monthfilter']) || isset($_POST['yearfilter']) && !empty($_POST['yearfilter']) )
            $args['date_query'] = array(
                array(
                    'year' => $_POST['yearfilter'],
                    'month' => $_POST['monthfilter']
                )
            );

        $query = new WP_Query( $args );
        
        if( $query->have_posts() ) :
            while( $query->have_posts() ): $query->the_post();
                echo '<div class="col-12 col-lg-4">';
                includeFile('components/card-schedule.php', array(
                    'image' => get_the_post_thumbnail_url(),
                    'title' => get_the_title(),
                    'date' => get_field('data_da_atividade'),
                    'time' => get_field('hora_da_atividade'),
                    'subtitle' => get_the_content()
                ));
                echo '</div>';
            endwhile;
            wp_reset_postdata();
        else :
            echo 'Nada encontrado';
        endif;
        
        die();
    }
    add_action('wp_ajax_agendadeatividadesfilter', 'agendadeatividades_filter_function');
    add_action('wp_ajax_nopriv_agendadeatividadesfilter', 'agendadeatividades_filter_function');
?>