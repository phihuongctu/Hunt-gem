<?php
function my_scripts_before()
{
    global $wp;
    $page_slug = add_query_arg(array(), $wp->request);

    wp_enqueue_style('main-style', HUNTGEM_ASSETS . '/css/main.css', array(), '1.0', 'all');

    // fullpage
    wp_enqueue_style('fullpage-min', HUNTGEM_ASSETS . '/css/fullpage.min.css', false, '1.0', 'all');
    wp_enqueue_script('fullpage-min', HUNTGEM_ASSETS . '/js/fullpage.min.js', null, null, true);

    // splide slider
    wp_enqueue_style('splide', HUNTGEM_ASSETS . '/css/splide/splide.min.css', false, '1.0', 'all');
    wp_enqueue_style('splide-core', HUNTGEM_ASSETS . '/css/splide/splide-core.min.css', false, '1.0', 'all');
    wp_enqueue_script('splide', HUNTGEM_ASSETS . '/js/splide.min.js', null, null, true);

    wp_enqueue_script('main', HUNTGEM_ASSETS . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_scripts_before');
add_filter('use_block_editor_for_post', '__return_false', 10);