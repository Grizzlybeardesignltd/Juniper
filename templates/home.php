<?php
/*
  Template Name: Home Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
<section id="banner">
    <!--Slider & Content-->
    <?php the_post_thumbnail('full');?>
</section>         
    <section id="content">
            <?php the_content(); ?>
    </section>
    <?php
endwhile;
rewind_posts();
?>
<?php echo get_template_part('parts/content', 'portfolio'); ?>
<?php echo get_template_part('parts/content', 'testimonial'); ?>
<?php get_footer(); ?>