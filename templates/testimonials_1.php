<?php
/*
  Template Name: Testimonials 1 Template
 */
get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <section id="content">
        <h1><?php the_title(); ?></h1>
        <img class="heading-bdr" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png">
        <?php the_content(); ?>
    </section>
<?php
endwhile;
rewind_posts();
?>
<?php
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

$args = array(
    'posts_per_page' => -1,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'testimonials',
    'post_status' => 'publish',
    'paged' => $paged,
    'suppress_filters' => true);

$posts = get_posts($args);
?>

<!-- get testimonials -->
<?php $the_query = new WP_Query($args); ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
    <div class="row">
        <div class="col-md-3">
    <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="col-md-9">
            <h2 class="heading-8"><?php the_title(); ?></h2>
    <?php the_content(); ?>
            <h3 class="heading-9 signature">Signature</h3>
        </div>
        <div class="div-block-11 sep-container">
            <img class="seperator" src="<?php echo get_template_directory_uri(); ?>/images/blue-line-01-01.png">
        </div>
    </div>
<?php endforeach; ?>


    <!-- pagination -->
    <?php
    $big = 999999999; // need an unlikely integer

    $pageNumbers = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $the_query->max_num_pages,
        'prev_text' => __(''),
        'next_text' => __(''),
    ));

    if ($pageNumbers != NULL) {

        $temp = get_previous_posts_link('&lt; Previous', 0);

        echo '<div class="pagination-container">';

        if (!$temp) {
            echo '<div id="previous-link inactive">';
            echo "<span class='inactive'>&lt; Previous</span>";
        } else {
            echo '<div id="previous-link">';
            echo $temp;
        }

        echo '</div><div id="number-links">';
        echo $pageNumbers;
        $temp = get_next_posts_link('Next &gt;', $the_query->max_num_pages);
        if (!$temp) {
            echo '</div><div id="next-link inactive">';
            echo "<span class='inactive'>Next &gt;</span>";
        } else {
            echo '</div><div id="next-link">';
            echo $temp;
        }
        echo '</div></div><div class="clearfix"></div>';
    }
    ?>
<?php get_footer(); ?>