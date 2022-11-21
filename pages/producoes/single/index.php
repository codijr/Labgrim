<?php get_header(); wp_reset_postdata();?>

<main>
    <section class="container bg-production py-5" id="title">
        <h1 class="text-white"><?php the_category(', '); ?></h1>
    </section>

    <section class="container py-5">
        <h1 class="text-production mb-2"><?php echo the_title(); ?></h1>
        <p class="body text-black"><?php echo the_excerpt(); ?></p>

        <div class="d-flex mt-4">
            <p class="body ms-2">
                <?php 
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    echo strftime('%d de %b, %Y', strtotime($post->post_date));
                ?>
            </p>
        </div>
        <hr/>

        <section class="post-content">
            <?php the_content();?>
            <?php 
                $pdf = get_field('pdf');

                if($pdf) {
                    includeFile('components/button-pdf/index.php', array(
                        'name' => 'BAIXAR PDF',
                        'url' => $pdf,
                    ));
                }
            ?>
        </section>

        <div class="d-flex mt-4">
            <p class="body ms-2">
                <?php 
                    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    date_default_timezone_set('America/Sao_Paulo');
                    echo strftime('%d de %b, %Y', strtotime($post->post_date));
                ?>
            </p>
        </div>
        <hr/>
        <h4 class="mb-3">Conteúdo relacionado</h4>
        <div class="row gx-3 gy-3">
            <?php 
                $args = array(
                    'post_type' => 'producao',
                    'category_name' => get_the_terms( $post->ID, 'tipo' )[0]->name,
                    'posts_per_page' => 3,
                    'post__not_in' => array( $post->ID )
                );
                $query = new WP_Query( $args );
                while ( $query -> have_posts()) : $query-> the_post();
            ?>
            <div class="col-12 col-lg-4">
                <?php includeFile('components/card-production/index.php', array(
                    'image' =>  get_the_post_thumbnail_url(),
                    'category' => get_the_terms( $post->ID, 'tipo' )[0]->name ,
                    'title' => get_the_title(),
                    'subtitle' => get_the_excerpt(),
                    'url' => get_the_permalink()
                )) ?>
            </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>