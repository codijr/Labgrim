<style>
    <?php require_once(get_template_directory().'/components/card-researcher/styles.css'); ?>
</style>

<div class="w-100 d-flex flex-column justify-content-center bg-white" id="card-researcher">
    <div class="bg-members" id="background-detail"></div>

    <div class="d-flex flex-column px-1" id="content">
        <div class="d-flex justify-content-center align-items-center mb-2" id="thumb">
            <img src="<?php echo $image ?>">
        </div>
        <div class="mx-4" id="info">
            <div class="mb-2">
                <h4 class="text-members text-center"><?php echo $name ?></h4>
            </div>

            <p class="body-2 text-gray mb-1 text-center"><?php echo $email ?></p>

            <div class="w-100 d-flex justify-content-center mb-1">
                <?php 
                    if($lattes) {
                        includeFile('components/button-pdf/index.php', array(
                            'name' => 'Lattes',
                            'url' => $lattes,
                        ));
                    }
                ?>
            </div>
        </div>
    </div>
</div>