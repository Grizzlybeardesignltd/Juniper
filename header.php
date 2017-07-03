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
        <link href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/webflow.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/juniper-home.webflow.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/header.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/footer.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/structure.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/portfolio.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/forms.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/home.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/about.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/css/typography.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
      <!-- <script type="text/javascript">
    !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
  </script> -->
    </head>

    <body <?php body_class('antialiased '); ?>>
        <?php echo get_template_part('parts/header', 'respsonsive-navbar'); ?>
        <header class="header" id="Header">
            <?php echo get_template_part('parts/header', 'navbar'); ?>
        </header>