<?php
/*
  Template Name: Gallery 1 Template
 */
get_header();
?>
    <main id="gallery">
        <?php
$args = array(
    'posts_per_page' => 1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'gallery',
    'post_status' => 'publish',
    'suppress_filters' => true);

$posts = get_posts($args);
?>

<!-- get testimonials -->
<?php $the_query = new WP_Query($args); ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
        <!-- Link to gallery uploader -->
        <?php the_post_thumbnail('full'); ?>
    </main>
<?php endforeach;
rewind_posts();?>

<?php while (have_posts()) : the_post(); ?>

    <section class="content">
        <h1><?php the_title(); ?></h1>
        <img class="heading-bdr line" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01.png"  width="415">
        </div>
        <?php the_content(); ?>
    </section>
    <?php
endwhile;
rewind_posts();
?>
<?php get_footer(); ?>