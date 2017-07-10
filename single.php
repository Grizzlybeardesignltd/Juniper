<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="clearfix">
                            <?php the_post_thumbnail('full'); ?>
                            <h3 class="heading-6 post-title"><?php the_title(); ?></h3>
                            <div class="entry-meta">
                                <ul>
                                    <li><a class="post-archive"><?php the_date(); ?></a></li>
                                    <li><a class="post-archive"><?php the_category();?></a></li>
                                </ul>
                                </div>
                            <!-- Entry meta here -->
                            <!-- Social sharing here -->
                            <div class="entry-content">
                            <p><?php the_content(); ?></p>
                            <!-- Single Post Gallery Photos here -->
                            </div>
                        </div>
                    </div>
                    <div class="column col-md-3">
                        <div class="blue-bg first sidebar-blocks"><img src="<?php echo get_template_directory_uri(); ?>/images/098-_MG_1599.jpg">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique</p><a class="button" href="contact.html">GET IN TOUCH</a>
                        </div>
                        <div class="sidebar sidebar-blocks">
                            <h3>Recent Posts</h3>
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
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; // end have_posts() check ?>

<?php get_footer(); ?>