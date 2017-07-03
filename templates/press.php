<?php
/*
  Template Name: Press Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
  <div class="section-12">
    <div class="w-container">
      <div class="div-block-17">
        <div class="div-block-22">
          <h1 class="heading-10 page-title"><?php the_title();?></h1><img class="heading-bdr" sizes="(max-width: 479px) 44vw, (max-width: 767px) 47vw, (max-width: 991px) 300px, 425px" src="<?php echo get_template_directory_uri();?>/images/blue-line-01-01.png" srcset="<?php echo get_template_directory_uri();?>/images/blue-line-01-01-p-500.png 500w, <?php echo get_template_directory_uri();?>/images/blue-line-01-01-p-800.png 800w, <?php echo get_template_directory_uri();?>/images/blue-line-01-01-p-1080.png 1080w, <?php echo get_template_directory_uri();?>/images/blue-line-01-01-p-1600.png 1600w, <?php echo get_template_directory_uri();?>/images/blue-line-01-01.png 1797w">
        </div>
        <div class="bottom-padding w-row">
          <div class="w-col w-col-3"><img class="image-38" src="<?php echo get_template_directory_uri();?>/images/twitter-link-01.png">
          </div>
          <div class="w-col w-col-3"><img class="image-39" src="<?php echo get_template_directory_uri();?>/images/pinterest-link-01.png">
          </div>
          <div class="w-col w-col-3"><img class="image-40" src="<?php echo get_template_directory_uri();?>/images/instagram-link-01.png">
          </div>
          <div class="w-col w-col-3"><img class="image-41" src="<?php echo get_template_directory_uri();?>/images/facebook-link-01.png">
          </div>
        </div>
      </div>
      <div class="bottom-padding w-row">
        <div class="w-col w-col-3"><img class="image-38" src="<?php echo get_template_directory_uri();?>/images/twitter-link-01.png">
        </div>
        <div class="w-col w-col-3"><img class="image-39" src="<?php echo get_template_directory_uri();?>/images/pinterest-link-01.png">
        </div>
        <div class="w-col w-col-3"><img class="image-40" src="<?php echo get_template_directory_uri();?>/images/instagram-link-01.png">
        </div>
        <div class="w-col w-col-3"><img class="image-41" src="<?php echo get_template_directory_uri();?>/images/facebook-link-01.png">
        </div>
      </div>
      <div class="w-row">
        <div class="w-col w-col-3"><img class="image-38" src="<?php echo get_template_directory_uri();?>/images/twitter-link-01.png">
        </div>
        <div class="w-col w-col-3"><img class="image-39" src="<?php echo get_template_directory_uri();?>/images/pinterest-link-01.png">
        </div>
        <div class="w-col w-col-3"><img class="image-40" src="<?php echo get_template_directory_uri();?>/images/instagram-link-01.png">
        </div>
        <div class="w-col w-col-3"><img class="image-41" src="<?php echo get_template_directory_uri();?>/images/facebook-link-01.png">
        </div>
      </div>
    </div>
  </div>
    <?php
endwhile;
rewind_posts();
?>
<?php get_footer(); ?>