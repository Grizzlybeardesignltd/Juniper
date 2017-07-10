<?php
/*
  Template Name: Gallery 3 Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
<section class="content">
        <h1><?php the_title();?></h1>
        <img class="heading-bdr" src="<?php echo get_template_directory_uri();?>/images/blue-line-01.png">
  </section>
  <div class="section-8">
    <div class="container">
      <div class="slider-4 w-slider" data-animation="slide" data-duration="500" data-infinite="1">
        <div class="w-slider-mask">
          <div class="slide"><img src="<?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488.jpg">
          </div>
          <div class="slide"><img src="<?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257.jpg">
          </div>
          <div class="slide"><img src="<?php echo get_template_directory_uri();?>/images/098-_MG_1599.jpg">
          </div>
          <div class="slide"><img src="<?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202.jpg">
          </div>
          <div class="slide"><img src="<?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED.jpg" >
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="gallery section-14">
    <div class="container">
      <div class="row-7 row">
        <div class="column-4 col-md-4"><img src="<?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257.jpg">
        </div>
        <div class="col-md-4"><img src="<?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488.jpg">
        </div>
        <div class="column-6 col-md-4"><img src="<?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED.jpg">
        </div>
      </div>
      <div class="row-8 row">
        <div class="column-7 col-md-4"><img src="<?php echo get_template_directory_uri();?>/images/098-_MG_1599.jpg">
        </div>
        <div class="column-8 col-md-4"><img src="<?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202.jpg">
        </div>
        <div class="column-9 col-md-4"><img src="<?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257.jpg">
        </div>
      </div>
    </div>
  </div>
    <?php
endwhile;
rewind_posts();
?>
<?php get_footer(); ?>