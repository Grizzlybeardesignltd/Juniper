<?php
/*
  Template Name: About Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <!--Banner & Content-->
    <div class="about content" id="about">
        <div class="w-container">
            <div>
                <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="div-block-16">
                <h1 class="heading-10 page-title"><?php the_title(); ?></h1><img class="heading-bdr" sizes="(max-width: 479px) 47vw, (max-width: 767px) 50vw, (max-width: 991px) 300px, 425px" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1080.png 1080w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1600.png 1600w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png 1797w">
            </div>
            <?php the_content(); ?>
    </div>
    <?php
endwhile;
rewind_posts();
?>
<?php echo get_template_part('parts/content', 'gallery-feed'); ?>

<?php get_footer(); ?>