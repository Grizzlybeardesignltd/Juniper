<?php get_header(); ?>
<section id="content">
    <div class="w-row">
        <div class="large-12 columns">
            <div class="w-row">
                <?php if (have_posts()) : ?>
                        <?php if (is_category()) { ?>
                        <h1 class="title w-col">
                        <?php single_cat_title(); ?>
                        </h1>
                        <?php } elseif (is_tag()) { ?>
                        <h1 class="title w-col">
                        <?php single_tag_title(); ?>
                        </h1>
                        <?php } elseif (is_author()) { ?>
                        <h1 class="title w-col">
                        <?php get_the_author_meta('display_name'); ?>
                        </h1>
                        <?php } elseif (is_day()) { ?>
                        <h1 class="title w-col">
                        <?php the_time('l, F j, Y'); ?>
                        </h1>
                        <?php } elseif (is_month()) { ?>
                        <h1 class="title w-col">
                        <?php the_time('F Y'); ?>
                        </h1>
                        <?php } elseif (is_year()) { ?>
                        <h1 class="title w-col">
                        <?php the_time('Y'); ?>
                        </h1>
                        <?php
                    };
                endif;
                ?>
            </div>
            <section class="section" id="Recent-Work">
                <div class="w-container">
                    <div class="w-row">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <div class="column-2 w-col w-col-6">
                                    <h1 class="heading" data-ix="fade-in-scroll"></h1>
                                    <div class="post-content sidebar-blocks w-clearfix" data-ix="fade-in-scroll">
                                        <?php the_post_thumbnail('large'); ?>
                                        <h3 class="heading-6"><?php the_title(); ?></h3>
                                        <p class="paragraph-3"><?php the_excerpt(); ?></p><a class="button-3 w-button" href="<?php the_permalink(); ?>">READ MORE</a>
                                    </div>
                                </div>
 
                           <?php endwhile; ?>
                        <?php endif; // end have_posts() check ?>
                    </div>
            </section>
            <?php
            if (function_exists('grizzlybear_pagination')) {
                grizzlybear_pagination();
            } else if (is_paged()) {
                ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'grizzlybear')); ?></div>
                    <div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'grizzlybear')); ?></div>
                </nav>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>