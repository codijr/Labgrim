<style>
    <?php require_once(get_template_directory().'/components/card-ex-researcher/styles.css'); ?>
</style>

<div class="card-ex-researcher w-100 d-flex flex-column justify-content-center bg-white py-2 px-4">
    <h4 class="text-members text-center mb-1"><?php echo $name ?></h4>

    <div class="w-100 d-flex justify-content-center">
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