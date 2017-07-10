<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
register_nav_menus(array(
    'top-bar' => 'Top Bar',    
    'top-bar-l' => 'Left Top Bar', // registers the menu in the WordPress admin menu editor
    'top-bar-r' => 'Right Top Bar',
    'product-nav' => 'Header Product Nav',
    'footer-nav' => 'Footer Nav',    
    'mobile-nav' => 'Mobile'
));


/**
 *  * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 *  Top Navigation
 */
if ( ! function_exists( 'gt_top_bar' ) ) {
	function gt_top_bar() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'top-bar-menu left hide-for-small',            // adding custom nav class
	        'theme_location' => 'top-bar',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new gt_walker()
	    ));
	}
}
/**
 * Left top bar
 */
if ( ! function_exists( 'gt_top_bar_l' ) ) {
	function gt_top_bar_l() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'top-bar-menu left hide-for-small',            // adding custom nav class
	        'theme_location' => 'top-bar-l',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new gt_walker()
	    ));
	}
}

/**
 * Right top bar
 */
if ( ! function_exists( 'gt_top_bar_r' ) ) {
	function gt_top_bar_r() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'top-bar-menu right',           // adding custom nav class
	        'theme_location' => 'top-bar-r',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new gt_walker()
	    ));
	}
}
/**
 * Production Navigation
 */
if ( ! function_exists( 'gt_product_nav' ) ) {
	function gt_product_nav() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'product-nav',            // adding custom nav class
	        'theme_location' => 'product-nav',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new Menu_With_Description()
	    ));
	}
}
if ( ! function_exists( 'gt_footer_nav' ) ) {
	function gt_footer_nav() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'footer-nav',            // adding custom nav class
	        'theme_location' => 'footer-nav',                // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new gt_walker()
	    ));
	}
}
/**
 * Right top bar
 */
/**
 * Mobile off-canvas
 */
if ( ! function_exists( 'gt_mobile_nav' ) ) {
	function gt_mobile_nav() {
	    wp_nav_menu(array( 
	        'container' => false,                           // remove nav container
	        'container_class' => '',                        // class of container
	        'menu' => '',                                   // menu name
	        'menu_class' => 'mobile-nav',              // adding custom nav class
	        'theme_location' => 'mobile-nav',        // where it's located in the theme
	        'before' => '',                                 // before each link <a> 
	        'after' => '',                                  // after each link </a>
	        'link_before' => '',                            // before each link text
	        'link_after' => '',                             // after each link text
	        'depth' => 5,                                   // limit the depth of the nav
	        'fallback_cb' => false,                         // fallback function (see below)
	        'walker' => new gt_walker()
	    ));
	}
}

/** 
 * Add support for buttons in the top-bar menu: 
 * 1) In WordPress admin, go to Apperance -> Menus. 
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'add_menuclass') ) {
	function add_menuclass($ulclass) {
	    $find = array('/<a rel="button"/', '/<a title=".*?" rel="button"/');
	    $replace = array('<a rel="button" class="button"', '<a rel="button" class="button"');
	    
	    return preg_replace($find, $replace, $ulclass, 1);
	}
	add_filter('wp_nav_menu','add_menuclass');
}

?>
