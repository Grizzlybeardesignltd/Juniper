<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Grizzly Bear Base Theme
 * @since Grizzly Bear Base Theme 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php grizzlybear_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a></figure> <?php the_excerpt(); ?>
	</div>
</article>