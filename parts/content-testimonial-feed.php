<!--Testimonial Feed-->
<section class="section-3" id="Testimonials"><img class="image-9" data-ix="slide-in-right" sizes="(max-width: 767px) 50vw, (max-width: 991px) 300px, 415px" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1080.png 1080w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1600.png 1600w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png 1797w" width="415">
    <div class="w-container">
        <?php
        $query = array(
            'post_type' => 'testimonials',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC'
        );
        //print_r($query);
        $queryObject = new WP_Query($query);
        if ($queryObject->have_posts()) {
            while ($queryObject->have_posts()) {
                $queryObject->the_post();
                ?>
                <div class="w-row">
                    <div class="paragraph-tab text-block" data-ix="slide-in-left">
                        <?php the_content(); ?>
                    </div>
                    <div class="signature text-block-2" data-ix="slide-in-right"><?php the_title(); ?></div>
                </div>
                <?php
            }
        };
        rewind_posts();
        ?>
    </div><img class="image-10" data-ix="slide-in-left" sizes="(max-width: 767px) 50vw, (max-width: 991px) 300px, 415px" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1080.png 1080w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1600.png 1600w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png 1797w" width="415">
</section>
<!---->