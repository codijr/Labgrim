<div class="card-schedule-home w-100 d-flex">
    <div id="thumb">
        <img src="<?php echo $image ?>">
    </div>

    <div class="d-flex flex-column justify-content-around px-3" id="info">
        <h5 class="text-schedule"><?php echo $title ?></h5>

        <div class="d-flex">
            <div class="d-flex me-3">
                <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/calendar.svg">
                <p class="body-2"><?php echo $date ?></p>
            </div>
            
            <div class="d-flex">
                <img class="me-2" src="<?php echo get_template_directory_uri(); ?>/assets/icons/time.svg">
                <p class="body-2"><?php echo $time ?></p>
            </div>
        </div>
    </div>
</div>