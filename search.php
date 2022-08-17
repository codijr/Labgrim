<?php
/* Template Name: Search Results */
$search_refer = $_GET['site_section'];
if ($search_refer == 'noticias') { load_template(get_template_directory() . '/noticias-search.php'); }
elseif ($search_refer == 'producoes') { load_template(get_template_directory() . '/producoes-search.php'); }
elseif ($search_refer == 'agendadeatividades') { load_template(get_template_directory() . '/agenda-search.php'); }; ?>