<?php
/*
  Template Name: Gallery 2 Template
 */
get_header();
?>
  <div class="section-7">
    <div class="w-container">
      <div class="div-block-19">
        <h1 class="heading-5"><?php the_title();?></h1><img class="heading-bdr line" sizes="(max-width: 767px) 47vw, (max-width: 991px) 300px, 425px" src="<?php echo get_template_directory_uri();?>/images/blue-line-01.png" srcset="<?php echo get_template_directory_uri();?>/images/blue-line-01-p-500.png 500w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-800.png 800w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-1080.png 1080w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-1600.png 1600w, <?php echo get_template_directory_uri();?>/images/blue-line-01-p-2000.png 2000w, <?php echo get_template_directory_uri();?>/images/blue-line-01.png 2409w" width="415">
      </div>
    </div>
  </div>
  <div class="section-10">
    <div class="w-container">
      <div class="w-row">
            <?php
            $query = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'order' => 'ASC'
            );
            //print_r($query);
            $queryObject = new WP_Query($query);
            if ($queryObject->have_posts()) {
                while ($queryObject->have_posts()) {
                    $queryObject->the_post();
                    ?>
                    <div class="w-col w-col-4">
                        <a href="<?php the_permalink();?>">
                            <figure>
                                <?php the_post_thumbnail('large'); ?>
                                <figcaption>
                                    <h2><span class="inn"><?php the_title(); ?></span></h2>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <?php
                }
            };
            rewind_posts();
            ?>
        </div>
    </div>
  </div>
<?php get_footer(); ?>