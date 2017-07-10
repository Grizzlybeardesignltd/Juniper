<?php
/*
  Template Name: Blog - Left Sidebar
 */
?>
<?php get_header(); ?>
<section id="content" class="container">
    <div class="row">
        <div class="col-lg-12">
            <img data-ix="fade-in-load" sizes="(max-width: 767px) 100vw, (max-width: 991px) 728px, 940px" src="<?php echo get_template_directory_uri(); ?>/images/Header-Image.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/Header-Image-p-500.jpeg 500w, <?php echo get_template_directory_uri(); ?>/images/Header-Image-p-1080.jpeg 1080w, <?php echo get_template_directory_uri(); ?>/images/Header-Image.jpg 1200w">
        </div>
    </div>
    <div class="row">
        <div class="col-md-9 right">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="heading" data-ix="fade-in-scroll"></h1>
                            <div class="post-content sidebar-blocks clearfix">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
                                <h3 class="heading-6"><?php the_title(); ?></h3>
                                <p class="paragraph-3"><?php the_excerpt(); ?></p><a class="button-3 w-button" href="<?php the_permalink(); ?>">READ MORE</a>
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
        <div class="col-md-3 left">
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>