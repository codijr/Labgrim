<?php get_header(); ?>

<main>
    <section class="bg-production" id="search-field">
        <div class="container  d-flex flex-column align-items-center justify-content-center">
            <form action="">
                <div class="d-flex align-items-center mb-5" >
                    <input class="w-100" type="search" name="" id="" placeholder="Pesquisar">
                    <button class="d-flex justify-content-center align-items-center" type="submit">
                        <?php includeFile('assets/icons/search.svg', array()); ?>
                    </button>
                </div>
            </form>

            <div class="container w-100 d-flex justify-content-center justify-content-xl-start" id="filters">
                <div class="row w-100 gx-3 gy-3">
                    <div class="col-12 col-lg-4 px-0">
                        <select class="w-100 selectpicker" name="" id="">
                            <option value="">TIPO</option>
                            <option value="">AUDIOVISUAL</option>
                            <option value="">ARTIGO</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-4 px-0">
                        <select class="w-100 selectpicker" name="" id="">
                            <option value="">ASSUNTO</option>
                            <option value="">INFANCIA</option>
                            <option value="">JUVENTUDE</option>
                            <option value="">MÍDIA</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-4 px-0">
                        <select class="w-100 selectpicker" name="" id="">
                            <option value="">DATA</option>
                            <option value="">2022</option>
                            <option value="">2021</option>
                            <option value="">2020</option>
                            <option value="">2019</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-3" id="list-productions">
        <div class="row gx-3 gy-3">
            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'category' => 'AUDIOVISUAL',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>
        </div>
    </section>

    <nav class="pagination d-flex justify-content-center w-100 mb-4">
        <div class="pagination-wrapper d-flex justify-content-around">
            <?php 
                $url = get_home_url($post->ID) . '/resultados-da-busca/?results=' . $queryPrograma . '%5D%5B' . $queryDestino;
                $big = 999999999;
                $pagination_args = array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $busca_query->max_num_pages,
                    'prev_text' => '<',
                    'next_text' => '>'
                );
                echo paginate_links( $pagination_args );
            ?>
        </div>
    </nav>
</main>

<?php get_footer(); ?>