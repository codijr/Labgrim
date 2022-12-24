<?php get_header(); ?>

<main>
    <section class="bg-production container py-5" id="search-field">
        <h1 class="text-white mb-5">Produções</h1>
        <div class="d-flex flex-column align-items-center justify-content-center">
            <?php includeFile('components/search-input/index.php', array(
                'search_page' => 'producoes'
            ))?>

            <div class="w-100 mt-3" id="filters">
                <form class="w-100 row gx-3 gy-3" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    <?php
                        if( $terms = get_terms( array(
                            'taxonomy' => 'tipo',
                            'orderby' => 'name'
                        ) ) ) : 
                            echo '<div class="col-12 col-xl-4">
                                    <select name="categoryfilter" class="selectpicker w-100">
                                        <option value="">Tipo</option>';
                                        foreach ( $terms as $term ) :
                                            echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                                        endforeach;
                            echo '</select>
                                </div>';
                        endif;  
                    ?>
                    <?php
                        echo '<div class="col-12 col-xl-4">
                                <select name="yearfilter" class="selectpicker w-100">
                                    <option value="">Ano</option>';
                                    for($i = date("Y"); $i >= date("Y")-3; $i--)
                                        echo '<option value="'.$i.'"> '.$i.' </option>';
                        echo '</select>
                            </div>';
                    ?>
                    <div class="col-12 col-xl-4">
                        <button class="w-100 bg-white">
                            <p class="tag text-production">Buscar</p>
                        </button>
                    </div>
                    
	                <input type="hidden" name="action" value="producaofilter">
                </form>
            </div>
        </div>
    </section>

    <section class="container mb-5 mt-5" id="list-productions">
        <div class="row gx-3 gy-3 mb-3" id="response">

            <?php 
                $args = array(
                    'post_type' => 'producao',
                    'posts_per_page' => 9,
                    'paged' => max(1, get_query_var('paged'))
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();
            ?>
                <div class="col-12 col-lg-4">
                    <?php includeFile('components/card-production/index.php', array(
                        'image' =>  get_the_post_thumbnail_url(),
                        'category' => get_the_terms( $post->ID, 'tipo' )[0]->name,
                        'title' => get_the_title(),
                        'subtitle' => get_the_excerpt(),
                        'url' => get_the_permalink()
                    )) ?>
                </div>
            <?php endwhile; ?>

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
        </div>
    </section>

    
</main>

<?php get_footer(); ?>