<?php get_header(); ?>

<main>
    <section class="position-relative w-100" id="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test-banner.png" />
        <div class="filter"></div>

        <div class="position-absolute d-flex" id="pattern-group">
            <img class="pattern" id="x-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            <img class="pattern" id="triangle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/triangle-pattern.svg" />
            <img class="pattern" id="x-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            <img class="pattern" id="circle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/circle-pattern.svg" />
            <img class="pattern" id="x-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
        </div>

        <div class="position-absolute w-100 d-flex flex-column align-items-center" id="info">
            <div class="container w-100 d-flex flex-column align-items-center">
                <button class="bg-news p-0">
                    <p class="tag px-3 py-1 text-white">Notícia</p>
                </button>
                
                <h1 class="text-center text-white">A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h1>
            </div>
        </div>
    </section>

    <section class="container w-100" id="other-news">
        <div class="w-100 bg-white" id="background">
            <div class="container pt-5 pb-3">
                <div class="swiper-news mb-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center px-4">
                            <p class="tag mb-2 text-news">Notícia</p>
                            <a href="#"><h5>A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h5></a>
                        </div>

                        <div class="swiper-slide text-center px-4">
                            <p class="tag mb-2 text-news">Notícia</p>
                            <a href="#"><h5>A arerentes</h5></a>
                        </div>

                        <div class="swiper-slide text-center px-4">
                            <p class="tag mb-2 text-news">Notícia</p>
                            <a href="#"><h5>A adoção responsáqwerweescentes</h5></a>
                        </div>
                    </div>
                    <div class="swiper-pagination mb-5"></div>
                </div>

                <div class="w-100 d-flex justify-content-center">
                    <button class="bg-news px-4 py-2">
                        <p class="tag text-white">VER MAIS</p>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="container w-100" id="content-home">
        <div class="row">
            <section class="col-12 col-xl-8">
                <h2 class="text-production mb-5">Produções</h2>

                <div class="mb-5" id="list-production">
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
            </section>

            <aside class="col-12 col-lg-4">
                <h2 class="text-schedule mb-1">Agenda de atividades</h2>

                <div id="list-schedule">
                    <?php includeFile('components/card-schedule-home.php', array(
                        'image' => get_template_directory_uri() . '/assets/img/test-schedule.png',
                        'title' => 'Entrevista com Edgar Maçal',
                        'date' => '25/10/2021',
                        'time' => '13:30'
                    )) ?>

                    <?php includeFile('components/card-schedule-home.php', array(
                        'image' => get_template_directory_uri() . '/assets/img/test-schedule.png',
                        'title' => 'Entrevista com Edgar Maçal',
                        'date' => '25/10/2021',
                        'time' => '13:30'
                    )) ?>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>