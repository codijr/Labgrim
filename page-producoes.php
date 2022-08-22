<?php get_header(); ?>

<main>
    <section class="bg-production" id="search-field">
        <div class="container  d-flex flex-column align-items-center justify-content-center">
            <?php includeFile('components/search-input.php', array(
                'search_page' => 'producoes'
            ))?>

            <div class="container w-100 d-flex justify-content-center justify-content-xl-start" id="filters">
                <!-- <div class="row w-100 gx-3 gy-3">
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
                </div> -->
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    <?php
                        if( $terms = get_terms( array(
                            'taxonomy' => 'category',
                            'orderby' => 'name'
                        ) ) ) : 
                            echo '<select name="categoryfilter"><option value="">Todos</option>';
                            foreach ( $terms as $term ) :
                                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>';
                            endforeach;
                            echo '</select>';
                        endif;  
                    ?>
                    <?php
                        echo '<select name="yearfilter"><option value="">Todos</option>';
                        for($i = date("Y"); $i >= date("Y")-3; $i--)
                            echo '<option value="'.$i.'"> '.$i.' </option>';
                        echo '</select>';
                    ?>
                    <button>Buscar</button>
	                <input type="hidden" name="action" value="producaofilter">
                </form>
            </div>
        </div>
    </section>

    <section class="container mb-3" id="list-productions">
        <div class="row gx-3 gy-3" id="response">

            <?php 
                $args = array(
                    'post_type' => 'producao'
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