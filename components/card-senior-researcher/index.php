<style>
    <?php require_once(get_template_directory().'/components/card-senior-researcher/styles.css'); ?>
</style>

<div class="card-senior-researcher w-100 d-flex bg-white mb-3">
    <div class="bg-members" id="background-detail"></div>

    <div class="d-flex flex-column flex-lg-row py-3 align-items-center" id="content">
        <div class="d-flex justify-content-center align-items-center mb-2 mb-lg-0" id="thumb">
            <img src="<?php echo $image;  ?>">
        </div>
        <div class="mx-4 px-2 w-100" id="info">
            <div class="d-flex mb-1 flex-column flex-lg-row">
                <div class="w-100 w-lg-0 d-flex mb-2 mb-lg-0 justify-content-center justify-content-lg-start align-items-center">
                    <h3 class="me-3 text-members mb-2 mb-lg-0 text-center text-lg-start"><?php echo $name ?></h3>

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

            <p class="body-2 text-gray text-center text-lg-start mb-4 mb-lg-0"><?php echo $email ?></p>

            <p class="body-2 text-center text-lg-start"><?php echo $description ?></p>
        </div>
    </div>
</div>