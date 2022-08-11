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
                <?php includeFile('components/card-senior-researcher.php', array(
                    'name' => get_the_title(),
                    'description' => get_the_content(),
                    'image' => get_the_post_thumbnail_url(),
                    'email' => get_field('email'),
                    'cargo' => get_field('cargo'),
                    'lattes' => get_field('lattes')
                )) ?>
            <?php endwhile; ?>
        </div>

        <h3 class="mb-3 text-members">Pesquisadores</h3>

        <div class="mb-5" id="list-researcher">
            <div class="row gx-3 gy-3 mb-3">
                <?php 
                    $args = array(
                        'post_type' => 'integrante',
                        'meta_value' => 'pesquisador'
                    );
                    $query = new WP_Query( $args );
                    while ( $query -> have_posts()) : $query-> the_post();
                ?>
                    <div class="col-12 col-lg-3">
                        <?php includeFile('components/card-researcher.php', array(
                            'name' => get_the_title(),
                            'image' => get_the_post_thumbnail_url(),
                            'email' => get_field('email'),
                        )) ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="w-100 d-flex justify-content-center">
                <button class="bg-members px-4 py-2">
                    <p class="tag text-white">VER MAIS</p>
                </button>
            </div>
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <h3 class="text-members">Ex-pesquisadores</h3>

            <select class="w-25 selectpicker" name="" id="">
                <option value="">ANO</option>
                <option value="">2022</option>
                <option value="">2021</option>
                <option value="">2020</option>
                <option value="">2019</option>
            </select>
        </div>

        <div class="mb-5" id="list-researcher">
            <div class="row gx-3 gy-3 mb-3">
                <?php 
                    $args = array(
                        'post_type' => 'integrante',
                        'meta_value' => 'ex_pesquisador'
                    );
                    $query = new WP_Query( $args );
                    while ( $query -> have_posts()) : $query-> the_post();
                ?>
                    <div class="col-12 col-lg-3">
                        <?php includeFile('components/card-ex-researcher.php', array(
                            'name' => get_the_title(),
                            'cargo' => get_field('cargo'),
                        )) ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>