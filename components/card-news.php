<div class="card-news w-100 position-relative">
    <img src="<?php echo $image ?>">
    
    <div class="position-absolute bottom-0 w-100" id="info">
        <div class="card-info bg-white px-3 py-2">
            <h4 class="text-news"><?php echo $title ?></h4>
            <p class="body-2"><?php echo substr(strip_tags($subtitle), 0, 100); ?>[...]</p>
        </div>
    </div>
</div>