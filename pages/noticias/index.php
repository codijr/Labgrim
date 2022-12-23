<?php get_header(); ?>

<main>
    <section class="bg-news container py-5" id="search-field">
        <h1 class="text-white pb-5">Notícias</h1>
        <div class="d-flex justify-content-center">
            <?php includeFile('components/search-input/index.php', array(
                'search_page' => 'noticias'
            ))?>
        </div>
    </section>

    <section class="container mb-5 mt-5" id="list-news">
        <div class="row gx-3 gy-3 mb-3">
            <?php 
                $args = array(
                    'post_type' => 'noticia',
                    'posts_per_page' => 9,
                    'paged' => max(1, get_query_var('paged'))
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();
            ?>
            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-news/index.php', array(
                    'image' => get_the_post_thumbnail_url(),
                    'title' => get_the_title(),
                    'subtitle' => get_the_content(),
                    'url' => get_the_permalink()
                )) ?>
            </div>
            <?php endwhile;  ?>
        </div>

        <nav class="pagination d-flex justify-content-center w-100">
            <div class="pagination-wrapper d-flex justify-content-around">
                <?php 
                    $total_pages = $query->max_num_pages;
                    $pagination_args = array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $query->max_num_pages,
                        'prev_text' => '<',
                        'next_text' => '>'
                    );
                    echo paginate_links( $pagination_args );
                    wp_reset_postdata();
                ?>
            </div>
        </nav>
    </section>

    
</main>

<?php get_footer();?>