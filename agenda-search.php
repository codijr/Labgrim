<?php get_header(); ?>

<main>
    <section class="bg-schedule" id="search-field">
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <?php includeFile('components/search-input/index.php', array(
                'search_page' => 'agendadeatividades'
            ))?>
        
            <div class="w-100 pt-3" id="filters">
                <form class="w-100 row gx-3 gy-3" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    <?php
                        echo '<div class="col-12 col-xl-3">
                                <select class="w-100 selectpicker" name="yearfilter">
                                    <option value="">Ano</option>';
                                    for($i = date("Y"); $i >= date("Y")-3; $i--)
                                        echo '<option value="'.$i.'"> '.$i.' </option>';
                        echo '</select>
                                </div>';
                    ?>
                    <div class="col-12 col-xl-3">
                        <select class="w-100 selectpicker" name="monthfilter" id="">
                            <option value="">Mês</option>
                            <option value="1">JANEIRO</option>
                            <option value="2">FEVEREIRO</option>
                            <option value="3">MARÇO</option>
                            <option value="4">ABRIL</option>
                            <option value="5">MAIO</option>
                            <option value="6">JUNHO</option>
                            <option value="7">JULHO</option>
                            <option value="8">AGOSTO</option>
                            <option value="9">SETEMBRO</option>
                            <option value="10">OUTUBRO</option>
                            <option value="11">NOVEMBRO</option>
                            <option value="12">DEZEMBRO</option>
                        </select>
                    </div>

                    <div class="col-12 col-xl-3">
                        <button class="w-100 bg-white">
                            <p class="tag text-schedule">Buscar</p>
                        </button>
                    </div>
                    <input type="hidden" name="action" value="agendadeatividadesfilter">
                </form>
            </div>
        </div>
    </section>

    <section class="container mb-3" id="list-agenda">
        <div class="row gx-3 gy-3">
            <?php
                $s=get_search_query();
                $args = array(
                    's' => $s,
                    'post_type' => 'agendadeatividades',
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();  
            ?>
                <div class="col-12 col-lg-4">
                    <?php includeFile('components/card-schedule/index.php', array(
                        'image' => get_the_post_thumbnail_url(),
                        'title' => get_the_title(),
                        'date' => get_field('data_da_atividade'),
                        'time' => get_field('hora_da_atividade'),
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