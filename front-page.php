<?php get_header(); ?>

<main>
    <section class="position-relative" id="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test-banner.png" />
        <div class="filter"></div>

        <div class="position-absolute d-flex" id="pattern-group">
            <img class="pattern" id="x-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            <img class="pattern" id="triangle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/triangle-pattern.svg" />
            <img class="pattern" id="x-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            <img class="pattern" id="circle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/circle-pattern.svg" />
            <img class="pattern" id="x-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
        </div>

        <div class="position-absolute d-flex flex-column align-items-center container" id="info">
            <button class="bg-news p-0">
                <p class="tag px-3 py-1 text-white">Notícia</p>
            </button>
            
            <h1 class="text-center text-white">A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h1>
        </div>
    </section>

    <section class="container" id="other-news">
        <div class="w-100 bg-white" id="background">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center">
                        <p class="tag mb-2 text-news">Notícia</p>
                        <h5 class="text-center">A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h5>
                    </div>

                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center">
                        <p class="tag mb-2 text-news">Notícia</p>
                        <h5 class="text-center">A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h5>
                    </div>

                    <div class="col-12 col-lg-4 d-flex flex-column align-items-center">
                        <p class="tag mb-2 text-news">Notícia</p>
                        <h5 class="text-center">A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h2 class="text-production mb-5">Produções</h2>

                <div class="h-100 mb-5" id="list-production">
                    <?php includeFile('components/card-production.php', array(
                        'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                        'category' => 'AUDIOVISUAL',
                        'title' => 'Publicidade Infantil',
                        'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                    )) ?>

                    <?php includeFile('components/card-production.php', array(
                        'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                        'category' => 'AUDIOVISUAL',
                        'title' => 'Publicidade Infantil',
                        'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                    )) ?>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <h2 class="text-schedule">Agenda de atividades</h2>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>