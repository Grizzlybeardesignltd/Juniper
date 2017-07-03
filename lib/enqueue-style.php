<?php

/* * *******************
  Enqueue the proper CSS
  if you use Sass.
 * ******************* */
if (!function_exists('grizzlybear_enqueue_style')) {
    function grizzlybear_enqueue_style() {
        wp_register_style('grizzlybear-main-stylesheet', get_stylesheet_directory_uri() . '/css/app.css', array(), '');
        wp_enqueue_style('grizzlybear-main-stylesheet');
    }
}
add_action('wp_enqueue_scripts', 'grizzlybear_enqueue_style');
?>
