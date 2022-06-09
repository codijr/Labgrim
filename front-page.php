<?php get_header(); ?>

<main>
    <section class="position-relative" id="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/test-banner.png" />
        <div class="filter"></div>

        <div class="position-absolute d-flex flex-column align-items-center container" id="info">
            <button class="bg-news p-0">
                <p class="tag px-3 py-1 text-white">Notícia</p>
            </button>
            
            <h1 class="text-center text-white">A adoção responsável pode fazer uma enorme diferença na vida de crianças e adolescentes</h1>
        </div>

        <div class="position-absolute d-flex" id="pattern-group">
            <img class="pattern" id="x-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            <img class="pattern" id="triangle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/triangle-pattern.svg" />
            <img class="pattern" id="x-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
            <img class="pattern" id="circle-1" src="<?php echo get_template_directory_uri(); ?>/assets/icons/circle-pattern.svg" />
            <img class="pattern" id="x-3" src="<?php echo get_template_directory_uri(); ?>/assets/icons/x-pattern.svg" />
        </div>
    </section>
</main>

<?php get_footer(); ?>