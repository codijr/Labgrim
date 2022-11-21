<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.png" />

    <?php wp_head(); ?>
    <style>
        <?php require_once(get_template_directory().'/components/header/styles.css'); ?>
    </style>
</head>
<body>
    <div class="vw-100 vh-100 position-fixed" id="background-menu"></div>

    <div class="d-flex w-100">
        <header class="d-lg-none fixed-top" id="mobile-header">
            <nav>
                <div class="container d-flex align-items-center">
                    <div class="d-flex justify-content-between w-100">
                        <button class="navbar-toggler shadow-none p-0 mb-2" id="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <input type="checkbox" id="hamburguer">
                            <label for="hamburguer">
                                <span class="hamburguer"></span>
                            </label>
                        </button>

                        <a class="navbar-brand me-0" href="<?php echo get_home_url(); ?>">
                            <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Labgrim logo">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse pb-5" id="navbarNav">
                        <div class="d-flex flex-column justify-content-between align-items-start h-100">
                            <ul class="navbar-nav w-100">
                                <li class="nav-item ps-4 py-2 <?php if(is_page('noticias') || is_singular('noticia') || is_search('noticias')) echo 'bg-news active'; ?>">
                                    <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/noticias/"><h4>NOTÍCIAS</h4></a>
                                </li>

                                <li class="nav-item ps-4 py-2 <?php if(is_page('producoes') || is_singular('producao')) echo 'bg-production active'; ?>">
                                    <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/producoes/"><h4>PRODUÇÕES</h4></a>
                                </li>

                                <li class="nav-item ps-4 py-2 <?php if(is_page('agenda') || is_singular('agendadeatividades')) echo 'bg-schedule active'; ?>">
                                    <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/agenda/"><h4>AGENDA DE ATIVIDADES</h4></a>
                                </li>

                                <li class="nav-item ps-4 py-2 <?php if(is_page('integrantes')) echo 'bg-members active'; ?>">
                                    <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/integrantes/"><h4>INTEGRANTES</h4></a>
                                </li>

                                <li class="nav-item ps-4 py-2 <?php if(is_page('sobre')) echo 'bg-about active'; ?>">
                                    <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/sobre/"><h4>SOBRE</h4></a>
                                </li>
                            </ul>

                            <select class="selectpicker px-4 w-100 shadow-none border-none">
                                <option class="w-100" data-content="
                                    <div class='d-flex'>
                                        <img class='me-2' src='<?php echo get_template_directory_uri(); ?>/assets/icons/brazilian.png'> 
                                        <h6>Português</h6>
                                    </div>"
                                >
                                </option>

                                <option class="w-100" data-content="
                                    <div class='d-flex'>
                                        <img class='me-2' src='<?php echo get_template_directory_uri(); ?>/assets/icons/english.png'> 
                                        <h6>Inglês</h6>
                                    </div>"
                                >
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </nav>

            <script>
                $('#navbar-toggler').click(() => {
                    if($('#navbar-toggler').attr('aria-expanded') == 'true') {
                        $('#background-menu').show();
                    } else {
                        $('#background-menu').hide();
                    }
                })
            </script>
        </header>  
        
        <header class="d-none d-lg-block w-25 vh-100" id="desktop-header">
            <nav class="h-100">
                <a class="navbar-brand me-0 h-25" href="<?php echo get_home_url(); ?>">
                    <img class="w-100 my-5 px-4" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="Labgrim logo">
                </a>

                <div class="pb-5 d-flex flex-column justify-content-between align-items-start h-75" >
                    <ul class="navbar-nav w-100">
                        <li class="nav-item ps-4 py-2 <?php if(is_page('noticias') || is_singular('noticia')) echo 'bg-news active'; ?>">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/noticias/"><h4>NOTÍCIAS</h4></a>
                        </li>

                        <li class="nav-item ps-4 py-2 <?php if(is_page('producoes') || is_singular('producao')) echo 'bg-production active'; ?>">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/producoes/"><h4>PRODUÇÕES</h4></a>
                        </li>

                        <li class="nav-item ps-4 py-2 <?php if(is_page('agenda') || is_singular('agendadeatividades')) echo 'bg-schedule active'; ?>">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/agenda/"><h4>AGENDA DE ATIVIDADES</h4></a>
                        </li>

                        <li class="nav-item ps-4 py-2 <?php if(is_page('integrantes')) echo 'bg-members active'; ?>">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/integrantes/"><h4>INTEGRANTES</h4></a>
                        </li>

                        <li class="nav-item ps-4 py-2 <?php if(is_page('sobre')) echo 'bg-about active'; ?>">
                            <a class="nav-link" href="<?php echo get_home_url(); ?>/index.php/sobre/"><h4>SOBRE</h4></a>
                        </li>
                    </ul>

                    <select class="selectpicker px-4 w-100 shadow-none border-none">
                        <option class="w-100" data-content="
                            <div class='d-flex'>
                                <img class='me-2' src='<?php echo get_template_directory_uri(); ?>/assets/icons/brazilian.png'> 
                                <h6>Português</h6>
                            </div>"
                        >
                        </option>

                        <option class="w-100" data-content="
                            <div class='d-flex'>
                                <img class='me-2' src='<?php echo get_template_directory_uri(); ?>/assets/icons/english.png'> 
                                <h6>Inglês</h6>
                            </div>"
                        >
                        </option>
                    </select>
                </div>
            </nav>
        </header>

        <div class="w-100" id="content">