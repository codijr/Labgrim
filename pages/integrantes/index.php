<?php get_header(); ?>

<main>
    <section class="container bg-members py-5" id="title">
        <h1 class="text-white">Integrantes</h1>
    </section>

    <section class="container py-5">
        <h3 class="mb-3 text-members">Pesquisadores seniores</h3>

        <div class="mb-5" id="list-senior-researcher">
            <?php 
                $args = array(
                    'post_type' => 'integrante',
                    'meta_value' => 'pesquisador_senior'
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();
            ?>
                <?php includeFile('components/card-senior-researcher/index.php', array(
                    'name' => get_the_title(),
                    'description' => get_the_content(),
                    'image' => has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/icons/profile-template.png',
                    'email' => get_field('email'),
                    'cargo' => get_field('cargo'),
                    'lattes' => get_field('lattes')
                )) ?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <h3 class="mb-3 text-members">Pesquisadores</h3>

        <div class="mb-5 w-100 g-2 row" id="list-researcher">
            <?php 
                $args = array(
                    'post_type' => 'integrante',
                    'meta_value' => 'pesquisador'
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();
            ?>      
                    <div class="col-6 col-xl-3">
                        <?php includeFile('components/card-researcher/index.php', array(
                        'name' => get_the_title(),
                        'image' => has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/icons/profile-template.png',
                        'email' => get_field('email'),
                        'lattes' => get_field('lattes')
                    )) ?>
                    </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <h3 class="text-members">Ex-integrantes</h3>
            
            <?php 
                if($terms = get_terms(
                    array(
                        'taxonomy' => 'ano_saida',
                    )
                )) :
                echo '<select class="w-25 selectpicker" name="" id="">';
                echo '<option value="">ANO</option>';
                foreach($terms as $term) :
                    echo '<option value="' . $term->slug . '">' . $term->name . '</option>';
                endforeach;
                echo '</select>';
                endif;
            ?>
        </div>

        <div class="mb-5" id="list-researcher">
            <div class="row g-2 mb-3 w-100">
                    <?php 
                    $args = array(
                        'post_type' => 'integrante',
                        'meta_value' => 'ex_pesquisador'
                    );
                    $query = new WP_Query( $args );

                    if(have_posts()) : while ( $query -> have_posts()) : $query-> the_post();
                    $terms = wp_get_post_terms( $post->ID, 'ano_saida' );
                    $ano = $terms[0]->name;
                    echo '<div class="ex-researcher-col col-6 col-lg-3" ano_saida="' . $ano .'">';
                        includeFile('components/card-ex-researcher/index.php', array(
                            'name' => get_the_title(),
                            'lattes' => get_field('lattes'),
                        ));
                        echo '</div>';
                        
                    endwhile; endif; wp_reset_postdata(); ?>
                
            </div>
        </div>
    </section>
</main>

<script>
    $('.selectpicker').change(function (e) { 
        e.preventDefault();
        var ano = $(this).val();
        var cards = $('.ex-researcher-col');
        cards.each(function (index, element) {
            if($(element).attr('ano_saida') == ano) {
                $(element).show();
            } else {
                $(element).attr('style', 'display: none !important');
            }
        });
    });
</script>

<?php get_footer(); ?>