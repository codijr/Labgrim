<style>
    <?php require_once(get_template_directory().'/components/search-input/styles.css'); ?>
</style>

<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url('/') ?>">
    <div class="d-flex align-items-center">
        <input class="w-100" type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Pesquisar">
        <input type="hidden" name="site_section" value="<?php echo $search_page?>" />
        <button class="d-flex justify-content-center algin-items-center" type="submit" id="searchsubmit"
            value="<?php esc_attr__( 'Search' ) ?>">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                    stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M19.0004 19L14.6504 14.65" stroke="black" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
</form>