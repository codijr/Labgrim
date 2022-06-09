<?php get_header(); ?>

<main>
    <section class="container d-flex justify-content-center bg-news" id="search-field">
        <form action="">
            <div class="d-flex align-items-center" >
                <input class="w-100" type="search" name="" id="" placeholder="Pesquisar">
                <button class="d-flex justify-content-center algin-items-center" type="submit">
                    <?php includeFile('assets/icons/search.svg', array()); ?>
                </button>
            </div>
        </form>
    </section>

    <section class="container mb-3" id="list-news">
        <div class="row gx-3 gy-3">
            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
                    'title' => 'Publicidade Infantil',
                    'subtitle' => 'Filme realizado pelo LabGRIM, alunos da disciplinda de Produção Audiovisual para Crianças e Adolescentes e Fundação Casa Grande.'
                )) ?>
            </div>

            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_template_directory_uri() . '/assets/img/test-production.png',
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