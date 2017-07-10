<?php
/*
  Template Name: Blog - Right Sidebar
 */
?>
<?php get_header(); ?>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
<section id="banner">
    <?php the_post_thumbnail();?>
</section>
<section id="content">
    <h1><?php the_title();?></h1>
    <?php the_content();?>
</section>
                <?php endwhile; ?>
            <?php endif; // end have_posts() check ?>
    <div class="row">
        <div class="col-md-9">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="heading"></h1>
                            <div class="post-content sidebar-blocks clearfix">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                <h3 class="heading-6"><?php the_title(); ?></h3>
                                <p class="paragraph-3"><?php the_excerpt(); ?></p><a class="button" href="<?php the_permalink(); ?>">READ MORE</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; // end have_posts() check ?>
            <?php
            if (function_exists('gt_pagination')) {
                gt_pagination();
            } else if (is_paged()) {
                ?>
                <nav id="post-nav">
                    <div class="post-previous"><?php next_posts_link(__('&larr; Older posts', 'grizzlybear')); ?></div>
                    <div class="post-next"><?php previous_posts_link(__('Newer posts &rarr;', 'grizzlybear')); ?></div>
                </nav>
            <?php } ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>