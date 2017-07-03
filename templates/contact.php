<?php
/*
  Template Name: Contact Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>

<?php echo get_template_part ('parts/content', 'banner');?>
<!--Contact Page Form-->
  <section class="contact section" id="Recent-Work">
    <?php the_content();?>
  </section>
<!---->
    <?php
endwhile;
rewind_posts();
?>
<?php get_footer(); ?>