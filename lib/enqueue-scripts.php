<?php
if (!function_exists('grizzly_enqueue_script')) {

    function grizzly_enqueue_script() {
        wp_enqueue_script('easing');
        wp_enqueue_script('webflow', get_template_directory_uri() . '/js/webflow.js', array('jquery'), false);
        wp_enqueue_script('masonry', true);
        wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
        wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/e077424c6e.js', array(), '1.0.0', false);
        wp_enqueue_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '1.0.0', true);
    }

}
add_action('wp_enqueue_scripts', 'grizzly_enqueue_script');
?>
