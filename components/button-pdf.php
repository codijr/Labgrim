<?php 
    function verify_page() {
        if(is_singular('noticia')) return 'news';
        else if(is_singular('producao')) return 'production';
        else return 'schedule';
    }
?>

<button class="bg-<?php echo verify_page(); ?> p-2 mt-3"><a href="<?php echo $url ?>" target="_blank">
    <div class="d-flex">
        <p class="tag text-white me-2">BAIXAR PDF</p>
        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/download.svg">
    </div>
</a></button>