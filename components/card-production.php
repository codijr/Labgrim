<div class="card-production w-100 position-relative mb-3">
    <img src="<?php echo $image ?>">
    
    <div class="position-absolute bottom-0 w-100" id="info">
        <button class="p-0 mb-2 ms-3 bg-production rounded-3">
            <p class="tag px-3 py-2 text-white"><?php echo $category ?></p>
        </button>

        <div class="card-info bg-white px-3 py-2">
            <h3 class="text-production"><?php echo $title ?></h3>
            <p class="body"><?php echo $subtitle ?></p>
        </div>
    </div>
</div>