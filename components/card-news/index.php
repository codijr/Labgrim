<style>
    <?php require_once(get_template_directory().'/components/card-news/styles.css'); ?>
</style>

<a href="<?php echo $url ?>">
    <div class="card-news w-100 position-relative shadow-sm">
        <img src="<?php echo $image ?>">

        <div class="position-absolute bottom-0 w-100" id="info">
            <div class="card-info bg-white px-3 py-2">
                <h4 class="text-news"><?php echo mb_strimwidth($title, 0, 50, "..."); ?></h4>
                <p class="body-2 text-black"><?php echo mb_strimwidth($subtitle, 0, 80, "..."); ?></p>
            </div>
        </div>
    </div>
</a>