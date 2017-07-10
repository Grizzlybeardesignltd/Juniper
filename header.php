<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta content="Webflow" name="generator">
        <?php echo get_template_part('parts/head', 'favicons'); ?>
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
      <!-- <script type="text/javascript">
    !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script> -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class('antialiased '); ?>>
        <header id="header">
            <!-- conditional to change from the default parts header navbar or the part/header-navbar-above -->
            <?php echo get_template_part('parts/header', 'navbar'); ?>
        </header>
        <!-- If is fullwidth need conditional to enable/disable this section -->
            <div class="container">
        <div class="row">