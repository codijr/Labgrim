<div class="card-senior-researcher w-100 d-flex bg-white mb-3">
    <div class="bg-members" id="background-detail"></div>

    <div class="d-flex py-3" id="content">
        <div class="d-flex justify-content-center align-items-center" id="thumb">
            <img src="<?php echo $image ?>">
        </div>
        <div class="mx-4" id="info">
            <div class="d-flex mb-1">
                <h3 class="text-members me-4"><?php echo $name ?></h3>
                <a href="<?php echo $lattes ?>" download class="bg-members" style="border: 0;border-radius: 4px;padding: 3px 5px;">
                    <div class="d-flex">
                        <p class="tag me-2 text-white">LATTES</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/download.svg ?>" alt="">
                    </div>
                </a>
            </div>

            <p class="body-2 text-gray mb-1"><?php echo $email ?></p>

            <div class="body-2"><?php echo $description ?></div>
        </div>
    </div>
</div>