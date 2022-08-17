<?php get_header(); ?>

<main>
    <section class="bg-news" id="search-field">
        <div class="container d-flex justify-content-center">
            <?php includeFile('components/search-input.php', array(
                'search_page' => 'noticias'
            ))?>
        </div>
    </section>

    <section class="container mb-3" id="list-news">
        <div class="row gx-3 gy-3">

            <?php 
                $args = array(
                    'post_type' => 'noticia'
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();
            ?>
            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news.php', array(
                    'image' => get_the_post_thumbnail_url(),
                    'title' => get_the_title(),
                    'subtitle' => get_the_content()
                )) ?>
            </div>
            <?php endwhile; ?>
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