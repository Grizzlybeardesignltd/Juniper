<!--Gallery Feed-->
<section id="recent-portfolio">
    <div class="container w-container">
        <h2 class="heading-2" data-ix="slide-up">Recent Work</h2>
        <div class="row">
            <?php
            $query = array(
                'post_type' => 'gallery',
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
                    <div class="col-md-4">
                        <a href="<?php the_permalink();?>">
                            <figure>
                                <?php the_post_thumbnail('large'); ?>
                                <figcaption>
                                    <h3><span class="inn"><?php the_title(); ?></span></h3>
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
        <a class="button-2 button-tab w-button" data-ix="slide-up" href="<?php echo get_bloginfo('url');?>/portfolio">SEE MY PORTFOLIO</a>
        <div class="bdr"></div>
    </div>
</section>