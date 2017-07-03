<?php get_header(); ?>

<!-- Row for main content area -->
<div id="content" role="main">
    <div class="w-row">
        <?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
            <article class="w-col-12 w-col" id="post-<?php the_ID(); ?>">
                <div class="entry-content">
    <?php the_content(); ?>
                </div>
            </article>

<?php endwhile; // End the loop  ?>
    </div>
</div>
		
<?php get_footer(); ?>