<style>
    <?php require_once(get_template_directory().'/components/card-senior-researcher/styles.css'); ?>
</style>

<div class="card-senior-researcher w-100 d-flex bg-white mb-3">
    <div class="bg-members" id="background-detail"></div>

    <div class="d-flex py-3" id="content">
        <div class="d-flex justify-content-center align-items-center" id="thumb">
            <img src="<?php echo $image ?>">
        </div>
        <div class="mx-4 px-2" id="info">
            <div class="d-flex mb-1">
                <h3 class="text-members me-4"><?php echo $name ?></h3>
                <?php 
                    if($lattes) {
                        includeFile('components/button-pdf/index.php', array(
                            'name' => 'Lattes',
                            'url' => $lattes,
                        ));
                    }
                ?>
            </div>

            <p class="body-2 text-gray mb-1"><?php echo $email ?></p>

            <p class="body-2"><?php echo $description ?></p>
        </div>
    </div>
</div>