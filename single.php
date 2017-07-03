<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="content section" id="Recent-Work">
            <div class="container-7 w-container">
                <div class="w-row">
                    <div class="column-2 w-col w-col-9">
                        <div class="w-clearfix" data-ix="fade-in-scroll">
                            <?php the_post_thumbnail('full'); ?>
                            <h3 class="heading-6 post-title"><?php the_title(); ?></h3><a class="link-6 post-archive"><?php the_date(); ?></a>
                            <div class="text-block-8">|</div><a class="link-6 post-archive"><?php the_category();?></a>
                            <p class="paragraph-3"><?php the_content(); ?></p>
                        </div>
                    </div>
                    <div class="column w-col w-col-3">
                        <div class="blue-bg first sidebar-blocks" data-ix="fade-in-scroll"><img class="image-31 image-list" sizes="(max-width: 767px) 90vw, (max-width: 991px) 147px, 190px" src="<?php echo get_template_directory_uri(); ?>/images/098-_MG_1599.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/098-_MG_1599-p-500.jpeg 500w, <?php echo get_template_directory_uri(); ?>/images/098-_MG_1599-p-1080.jpeg 1080w, <?php echo get_template_directory_uri(); ?>/images/098-_MG_1599-p-1600.jpeg 1600w, <?php echo get_template_directory_uri(); ?>/images/098-_MG_1599.jpg 1920w">
                            <p class="paragraph paragraph-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p><a class="button-2 w-button" data-ix="slide-up" href="contact.html">GET IN TOUCH</a>
                        </div>
                        <div class="sidebar sidebar-blocks" data-ix="fade-in-scroll">
                            <h3 class="heading-6">Recent Posts</h3>
                            <?php
                            // WP_Query arguments
                            $query = array(
                                'post_type' => 'post',
                                'posts_per_page' => '5',
                                'orderby' => array(
                                    'meta_value' => 'ASC',
                                    'date' => 'DESC'
                                ),
                            );
                            // print_r($query);
                            $queryObject = new WP_Query($query);
                            if ($queryObject->have_posts()) {
                                while ($queryObject->have_posts()) {
                                    $queryObject->the_post();
                                    ?>
                                    <ul>
                                        <li>
                                            <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </li>
                                    </ul>
                                    <?php
                                }
                            };
                            wp_reset_query();
                            ?>
                        </div>
                        <div class="sidebar sidebar-blocks" data-ix="fade-in-scroll">
                            <h3 class="heading-6">Archives</h3><?php wp_get_archives(array('type' => 'monthly', 'limit' => 12)); ?>
                        </div>
                        <div class="sidebar sidebar-blocks" data-ix="fade-in-scroll">
                            <h3 class="heading-6">Categories</h3><?php wp_list_categories(); ?>
                        </div>
                        <div class="sidebar sidebar-blocks" data-ix="fade-in-scroll">
                            <h3 class="heading-6">Search</h3><img class="image-4 sidebar-bdr" data-ix="slide-in-right" sizes="(max-width: 767px) 90vw, (max-width: 991px) 147px, 190px" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png" srcset="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-500.png 500w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-800.png 800w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1080.png 1080w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01-p-1600.png 1600w, <?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png 1797w" width="415">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>