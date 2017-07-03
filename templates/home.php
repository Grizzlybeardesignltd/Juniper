<?php
/*
  Template Name: Home Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <!--Slider & Content-->
    <img class="image-16" data-ix="fade-in-load" sizes="100vw" src="<?php echo get_template_directory_uri(); ?>/images/HOMEPAGE-COMBO-2-WED.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/HOMEPAGE-COMBO-2-WED-p-500.jpeg 500w, <?php echo get_template_directory_uri(); ?>/images/HOMEPAGE-COMBO-2-WED-p-1080.jpeg 1080w, <?php echo get_template_directory_uri(); ?>/images/HOMEPAGE-COMBO-2-WED-p-1600.jpeg 1600w, <?php echo get_template_directory_uri(); ?>/images/HOMEPAGE-COMBO-2-WED.jpg 1920w" width="1427">
    <section class="content section" id="Home-Content">
        <div class="w-container">
            <img class="image-3" data-ix="slide-in-left" sizes="(max-width: 767px) 100vw, (max-width: 991px) 300px, 415px" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-p-1080.png 1080w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-p-1600.png 1600w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-p-2000.png 2000w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01.png 2409w" width="415">
            <?php the_content(); ?>
        </div>
    </section>
    <?php
endwhile;
rewind_posts();
?>
<?php echo get_template_part('parts/content', 'gallery-feed'); ?>
<?php echo get_template_part('parts/content', 'testimonial-feed'); ?>
<?php get_footer(); ?>

<div class="w-row">
    <div class="column-2 w-col w-col-6">
        <h1 class="heading" style="text-align: left;" data-ix="slide-in-left">About me</h1>
        <p style="text-align: left;">Junipers are coniferous plants, they vary in size and shape from tall trees to low spreading shrubs. They can be found throughout the Northern Hemisphere, from Arctic to tropical Africa, From Pakistan to the mountains of Central America. Juniper berries are a spice used in a wide variety of culinary dishes, but best known as the primary flavouring in gin.</p>
    </div>
    <div class="column w-clearfix w-col w-col-6">
        <img class="alignright" src="http://gbd-test.biz/juniper/wp-content/uploads/2017/06/096-343-Curtis-D66A6202-p-800.jpeg" />
    </div>
</div>
<div class="w-row">
    <div class="column-2 w-col w-col-6">
        <img class="alignleft" src="http://gbd-test.biz/juniper/wp-content/uploads/2017/06/098-_MG_1599-p-1080-1024x683.jpeg" />
    </div>
    <div class="column w-clearfix w-col w-col-6">
        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.<a class="button button-tab w-button" href="http://gbd-test.biz/juniper/about/" data-ix="slide-in-right">READ MORE</a>
    </div>
</div>