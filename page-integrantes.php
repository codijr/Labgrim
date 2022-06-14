<?php get_header(); ?>

<main>
    <section class="container bg-members py-5" id="title">
        <h1 class="text-white">Integrantes</h1>
    </section>

    <section class="container py-5">
        <h3 class="mb-3 text-members">Pesquisadores seniores</h3>

        <div class="mb-5" id="list-senior-researcher">
            <?php includeFile('components/card-senior-researcher.php', array()) ?>

            <?php includeFile('components/card-senior-researcher.php', array()) ?>

            <?php includeFile('components/card-senior-researcher.php', array()) ?>
        </div>

        <h3 class="mb-3 text-members">Pesquisadores</h3>

        <div class="mb-5" id="list-researcher">
            <div class="row gx-3 gy-3 mb-3">
                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-researcher.php', array()) ?>
                </div>
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
                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>

                <div class="col-12 col-lg-3">
                    <?php includeFile('components/card-ex-researcher.php', array()) ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>