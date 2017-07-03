<?php
require_once('lib/clean.php'); // do all the cleaning and enqueue here
require_once('lib/enqueue-style.php');
require_once('lib/enqueue-scripts.php');
require_once('lib/custom-post-types.php');
require_once('lib/acf-options.php');
require_once('lib/foundation.php'); 
require_once('lib/entry-meta.php'); 
require_once('lib/widget-areas.php');
require_once('lib/nav.php');

/* * ********************
  Add theme supports
 * ******************** */
if (!function_exists('grizzlybear_theme_support')) {

    function grizzlybear_theme_support() {
        // Add language supports.
        load_theme_textdomain('grizzlybear', get_template_directory() . '/lang');

        // Add post thumbnail supports. http://codex.wordpress.org/Post_Thumbnails
        add_theme_support('post-thumbnails');

        // rss thingy
        add_theme_support('automatic-feed-links');

        // Add post formats support. http://codex.wordpress.org/Post_Formats
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

        // Add menu support. http://codex.wordpress.org/Function_Reference/register_nav_menus
        add_theme_support('menus');
        register_nav_menus(array(
            'primary' => __('Primary Nav', 'grizzlybear'),
            'footer' => __('Footer Nav', 'grizzlybear'),
            'mobile_menu' => __('Mobile Nav', 'grizzlybear')
        ));
    }
}

add_action('after_setup_theme', 'grizzlybear_theme_support'); /* end Grizzly Bear Base Theme support */

// create widget areas: sidebar, footer
// return entry meta information for posts, used by multiple loops, you can override this function by defining them first in your child theme's functions.php file
if (!function_exists('grizzlybear_entry_meta')) {

    function grizzlybear_entry_meta() {
        echo '<time class="updated" datetime="' . get_the_time('c') . '" pubdate>' . get_the_time('jS M Y') . '</time>';
    }

};
function arj_isotope_pagination( $galleries ) {
    if ( $galleries->max_num_pages > 1 ) : ?>
        <nav id="portfolio-nav" class="navigation" role="navigation">
            <?php previous_posts_link('â‰ª Previous', $galleries->max_num_pages); ?>
            <?php next_posts_link('More â‰«', $galleries->max_num_pages); ?>
        </nav><!-- #page-nav .navigation -->
    <?php endif;
}

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<div class='button-wrapper'><button class='button' id='gform_submit_button_{$form['id']}'><span>Send</span></button></div>";
}