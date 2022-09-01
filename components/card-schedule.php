<a href="<?php echo $url ?>">
    <div class="card-schedule w-100 position-relative">
        <img class="thumb" src="<?php echo $image ?>">
        
        <div class="position-absolute bottom-0 w-100" id="info">
            <div class="card-info bg-white px-3 py-2">
                <h4 class="text-schedule mb-2"><?php echo $title ?></h4>
                <div class="d-flex">
                    <div class="d-flex me-3">
                        <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar.svg">
                        <p class="body-2 date text-black"><?php echo $date ?></p>
                    </div>

                    <div class="d-flex">
                        <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/time.svg">
                        <p class="body-2 time text-black"><?php echo $time ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</a>