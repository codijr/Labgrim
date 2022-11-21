<style>
    <?php require_once(get_template_directory().'/components/card-schedule/styles.css'); ?>
</style>

<a href="<?php echo $url ?>">
    <div class="card-schedule w-100 position-relative shadow-sm">
        <img class="thumb" src="<?php echo $image ?>">
        
        <div class="position-absolute bottom-0 w-100" id="info">
            <div class="card-info bg-white px-3 py-2 d-flex flex-column justify-content-between">
                <h4 class="text-schedule mb-2"><?php echo mb_strimwidth($title, 0, 50, "..."); ?></h4>
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