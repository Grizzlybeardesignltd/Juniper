<?php
/*
  Template Name: Press Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <section id="content">
        <h1><?php the_title(); ?></h1>
        <img class="heading-bdr" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png">

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </section>
<main id="press-listing">
    <div class="bottom-padding row">
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-link-01.png">
        </div>
    </div>
    <div class="bottom-padding row">
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-link-01.png">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/pinterest-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-link-01.png">
        </div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-link-01.png">
        </div>
    </div>
</main>
    <?php
endwhile;
rewind_posts();
?>
<?php get_footer(); ?>