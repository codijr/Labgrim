<?php get_header(); ?>

<main>
    <section class="position-relative w-100" id="banner">
        <?php 
            $args = array(
                'post_type' => 'noticia',
                'posts_per_page' => 1
            );
            $query = new WP_Query( $args );
            while ( $query -> have_posts()) : $query-> the_post();
        ?>
            <img src="<?php echo get_the_post_thumbnail_url() ?>" />
            <div class="filter"></div>

            <div class="position-absolute d-flex" id="pattern-group">
                <img class="pattern" id="x-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
                <img class="pattern" id="triangle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/triangle-pattern.svg" />
                <img class="pattern" id="x-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
                <img class="pattern" id="circle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/circle-pattern.svg" />
                <img class="pattern" id="x-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            </div>

            <div class="position-absolute w-100 d-flex flex-column align-items-center" id="info">
                <div class="container w-100 d-flex flex-column align-items-center">
                    <button class="bg-news p-0">
                        <p class="tag px-3 py-1 text-white"><?php the_tags('')[0]; ?></p>
                    </button>
                    
                    <a href="<?php echo get_permalink(); ?>">
                        <h1 class="text-center text-white"><?php echo mb_strimwidth(get_the_title(), 0, 80, "..."); ?></h1>
                    </a>
                </div>
            </div>
        <?php endwhile; ?>
    </section>

    <section class="container w-100" id="other-news">
        <div class="w-100 bg-white" id="background">
            <div class="container pt-5 pb-3">
                <div class="swiper-news mb-3">
                    <div class="swiper-wrapper">
                        <?php 
                            $args = array(
                                'post_type' => 'noticia',
                                'posts_per_page' => 3,
                                'offset' => 1
                            );
                            $query = new WP_Query( $args );
                            while ( $query -> have_posts()) : $query-> the_post();
                        ?>
                            <div class="swiper-slide text-center px-4">
                                <p class="tag mb-2 text-news"><?php the_tags('')[0]; ?></p>
                                <a href="<?php echo get_permalink(); ?>"><h5><?php echo mb_strimwidth(get_the_title(), 0, 80, "..."); ?></h5></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="swiper-pagination mb-5"></div>
                </div>

                <div class="w-100 d-flex justify-content-center pt-4">
                    <button class="bg-news px-4 py-2">
                        <a href="<?php echo get_home_url(); ?>/index.php/noticias">
                            <p class="tag text-white">VER MAIS</p>
                        </a>
                    </button>
                </div>  
            </div>
        </div>
    </section>

    <div class="container w-100" id="content-home">
        <div class="row">
            <section class="col-12 col-xl-8">
                <h2 class="text-production mb-5">Produções</h2>

                <div class="mb-3" id="list-production">
                    <?php 
                        $args = array(
                            'post_type' => 'producao'
                        );
                        $query = new WP_Query( $args );
                        while ( $query -> have_posts()) : $query-> the_post();
                    ?>
                        <?php includeFile('components/card-production.php', array(
                            'image' =>  get_the_post_thumbnail_url(),
                            'category' => get_the_category( $id )[0]->name ,
                            'title' => get_the_title(),
                            'subtitle' => get_the_excerpt(),
                            'url' => get_the_permalink()
                        )) ?>
                    <?php endwhile; ?>
                </div>

                <div class="d-flex justify-content-center mb-5">
                    <button class="bg-production px-4 py-2">
                        <a href="<?php echo get_home_url(); ?>/index.php/producoes">
                            <p class="tag text-white">VER MAIS</p>
                        </a>
                    </button>
                </div>
            </section>

            <aside class="col-12 col-lg-4">
                <h2 class="text-schedule mb-1">Agenda de atividades</h2>

                <div class="mb-3" id="list-schedule">
                    <?php 
                        $count = 1;
                        $args = array(
                            'post_type' => 'agendadeatividades'
                        );
                        $query = new WP_Query( $args );
                        while ( $query -> have_posts()) : $query-> the_post();
                    ?>
                        <?php includeFile('components/card-schedule-home.php', array(
                            'image' => get_the_post_thumbnail_url(),
                            'title' => get_the_title(),
                            'date' => get_field('data_da_atividade'),
                            'time' => get_field('hora_da_atividade'),
                            'url' => get_the_permalink()
                        )) ?>

                        <?php 
                            $count+=1; 
                            if($count == 2 || $count == 3) {
                                echo '<hr/>';
                            }
                        ?>
                    <?php endwhile; ?>
                </div>

                <button class="bg-schedule px-4 py-2">
                    <a href="<?php echo get_home_url(); ?>/index.php/agenda">
                        <p class="tag text-white">VER MAIS</p>
                    </a>
                </button>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>