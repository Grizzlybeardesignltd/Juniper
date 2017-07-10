<!-- Navbar -->
<div class="container">
<nav id="primary-navigation" class="site-navigation clearfix" role="navigation">
    <div id="header-logo">
        <!-- Link to the custom logo URL here and have a default option -->
        <a class="logo nav-brand" href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Juniper-Logo-01.png" width="145" alt="<?php bloginfo('name');?>"></a>
            </div>
            <div class="menu-main-menu-container">
                <?php gt_top_bar(); ?>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
                <div id="mobile-logo">
                            <!-- Link to the custom mobile logo URL here and have a default option -->
                    <a class="logo nav-brand" href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/Juniper-Logo-01.png" width="145" alt="<?php bloginfo('title'); ?>"></a>
                </div>
                <?php
                wp_nav_menu(array(
                    'menu' => 'mobile_menu',
                    'theme_location' => 'mobile_menu',
                    'depth' => 0,
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => 'collapse navbar-collapse',
                    //'fallback_cb' => 'wp_page_menu',
                    'walker' => new gt_walker(array(
                        'in_top_bar' => false,
                        'item_type' => 'li',
                        'menu_type' => 'main-menu'
                            )),
                ));
                ?>
            </div>
            </nav>
</div>