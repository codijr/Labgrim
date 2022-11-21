<style>
    <?php require_once(get_template_directory().'/components/card-production/styles.css'); ?>
</style>

<a href="<?php echo $url ?>">
    <div class="card-production w-100 position-relative shadow-sm mb-3">
        <img src="<?php echo $image ?>">
        
        <div class="position-absolute bottom-0 w-100" id="info">
            <div class="p-0 mb-2 ms-3 bg-production rounded-3" id="tag">
                <p class="tag px-3 py-2 text-white"><?php echo $category ?></p>
            </div>

            <div class="card-info bg-white px-3 py-2">
                <?php if(is_front_page()) : ?>
                    <h3 class="text-production"><?php echo $title ?></h3>
                    <p class="body text-black"><?php echo mb_strimwidth($subtitle, 0, 150, "..."); ?></p>
                <?php else : ?>
                    <h4 class="text-production"><?php echo substr(strip_tags($title), 0, 50); ?>...</h4>
                    <p class="body-2 text-black"><?php echo substr(strip_tags($subtitle), 0, 75); ?>[...]</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</a>