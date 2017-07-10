<?php get_header(); ?>

<!-- Row for main content area -->
<section id="content" role="main">
    <div class="row">
        <?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
        <!-- If layout page settings for pages is either left or right aligned change article to either col-lg-9 or col-lg-9 right -->
            <article class="col-lg-12" id="post-<?php the_ID(); ?>">
                <?php if(has_post_thumbnail()):
                    the_post_thumbnail('full');
                endif;?>
                <div class="entry-content">
                    <h1><?php the_title();?></h1>
    <?php the_content(); ?>
                </div>
            </article>
        <!-- if page template is not full width put in here
        <div class="col-lg-3">
        <?php // get_sidebar();?>
        </div>
        -->
<?php endwhile; // End the loop  ?>
    </div>
</section>
		
<?php get_footer(); ?>