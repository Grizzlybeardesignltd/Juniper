<?php
/*
  Template Name: Gallery 4 Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
<div class="section-7">
    <div class="w-container">
      <div class="div-block-21">
        <h4 class="heading-5"><?php the_title();?></h4><img class="heading-bdr" sizes="(max-width: 767px) 47vw, (max-width: 991px) 300px, 425px" src="<?php echo get_template_directory_uri();?>/images/blue-line-01.png" srcset="<?php echo get_template_directory_uri();?>/images/blue-line-01-p-500.png 500w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-800.png 800w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-1080.png 1080w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-1600.png 1600w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-2000.png 2000w, <?php echo get_template_directory_uri();?>/images/blue-line-01.png 2409w" width="415">
      </div>
    </div>
  </div>
  <div class="section-8">
    <div class="w-container">
      <div class="slider-4 w-slider" data-animation="slide" data-duration="500" data-infinite="1">
        <div class="w-slider-mask">
          <div class="w-slide"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" src="<?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488.jpg" srcset="<?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488-p-500.jpeg 500w, <?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488-p-1080.jpeg 1080w, <?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488-p-1600.jpeg 1600w, <?php echo get_template_directory_uri();?>/images/068-351---Nuttall---D66A0488.jpg 1920w">
          </div>
          <div class="w-slide"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" src="<?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257.jpg" srcset="<?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257-p-500.jpeg 500w, <?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257-p-800.jpeg 800w, <?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257-p-1080.jpeg 1080w, <?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257-p-1600.jpeg 1600w, <?php echo get_template_directory_uri();?>/images/082-459--Dashwood--_MG_5257.jpg 1920w">
          </div>
          <div class="w-slide"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" src="<?php echo get_template_directory_uri();?>/images/098-_MG_1599.jpg" srcset="<?php echo get_template_directory_uri();?>/images/098-_MG_1599-p-500.jpeg 500w, <?php echo get_template_directory_uri();?>/images/098-_MG_1599-p-1080.jpeg 1080w, images/098-_MG_1599-p-1600.jpeg 1600w, <?php echo get_template_directory_uri();?>/images/098-_MG_1599.jpg 1920w">
          </div>
          <div class="w-slide"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" src="<?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202.jpg" srcset="<?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202-p-500.jpeg 500w, <?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202-p-800.jpeg 800w, <?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202-p-1080.jpeg 1080w, <?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202-p-1600.jpeg 1600w, <?php echo get_template_directory_uri();?>/images/096-343---Curtis---D66A6202.jpg 1920w">
          </div>
          <div class="w-slide"><img sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" src="<?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED.jpg" srcset="<?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED-p-500.jpeg 500w, <?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED-p-1080.jpeg 1080w, <?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED-p-1600.jpeg 1600w, <?php echo get_template_directory_uri();?>/images/HOMEPAGE-COMBO-2-WED.jpg 1920w">
          </div>
        </div>
        <div class="w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
        </div>
        <div class="w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-14">
    <div class="w-container">
      <div class="row">
        <div class="left-col col-md-6">
          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        </div>
        <div class="right-col col-md-6">
          <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
        </div>
      </div>
    </div>
  </div>
    <?php
endwhile;
rewind_posts();
?>
<?php get_footer(); ?>