<?php get_header(); ?>

<main>
    <section class="bg-production" id="search-field">
        <div class="container  d-flex flex-column align-items-center justify-content-center">
            <?php includeFile('components/search-input.php', array(
                'search_page' => 'producoes'
            ))?>

            <div class="w-100 pt-3" id="filters">
                <form class="w-100 row gx-3 gy-3" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    <?php
                        if( $terms = get_terms( array(
                            'taxonomy' => 'category',
                            'orderby' => 'name'
                        ) ) ) : 
                            
                            echo '<div class="col-12 col-xl-4">
                                    <select name="categoryfilter" class="selectpicker w-100">
                                        <option value="">Categoria</option>';
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

    <section class="container mb-3" id="list-productions">
        <div class="row gx-3 gy-3">
            <?php
                $s=get_search_query();
                $args = array(
                    's' => $s,
                    'post_type' => 'producao',
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();  
            ?>
                <div class="col-12 col-lg-4">
                    <?php includeFile('components/card-production.php', array(
                        'image' =>  get_the_post_thumbnail_url(),
                        'category' => get_the_category( $id )[0]->name ,
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