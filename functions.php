<?php
function import_css(){
    wp_enqueue_style('css', get_stylesheet_uri(), null, false, 'all');
}
add_action('wp_enqueue_scripts', 'import_css');
?>