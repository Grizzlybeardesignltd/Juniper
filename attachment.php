<?php get_header();?>
<section id="main-content">
    <div class="row">

<?php if ( have_posts() ) while ( have_posts() ) : the_post();
	            $post_id = $post -> ID?>
        <?php layout::side( 'left' , 0 , 'attachment' ); ?>
         <?php $content_width_class = tools::primary_class( $post_id , 'attachment', $return_just_class = true );?>
        <div class="<?php echo $content_width_class;?>">

					<h2 class="page-title"><?php the_title(); ?></h2>
                                        <p>
						<?php
							printf(__('By %2$s', 'twentyten'),
								'meta-prep meta-prep-author',
								sprintf( '<a class="url fn n" href="%1$s" title="%2$s">%3$s</a>',
									get_author_posts_url( get_the_author_meta( 'ID' ) ),
									sprintf( esc_attr__( 'View all posts by %s', 'twentyten' ), get_the_author() ),
									get_the_author()
								)
							);
						?>
						<span>|</span>
						<?php
							printf( __('Published %2$s', 'twentyten'),
								'meta-prep meta-prep-entry-date',
								sprintf( '<abbr title="%1$s">%2$s</abbr>',
									esc_attr( get_the_time() ),
									get_the_date()
								)
							);
							if ( wp_attachment_is_image() ) {
								echo ' | ';
								$metadata = wp_get_attachment_metadata();
								printf( __( 'Full size is %s pixels', 'twentyten'),
									sprintf( '<a href="%1$s" title="%2$s">%3$s &times; %4$s</a>',
										wp_get_attachment_url(),
										esc_attr( __('Link to full-size image', 'twentyten') ),
										$metadata['width'],
										$metadata['height']
									)
								);
							}
						?>
                                        </p>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

<?php if ( wp_attachment_is_image() ) :
	$attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );
	foreach ( $attachments as $k => $attachment ) {
		if ( $attachment->ID == $post->ID )
			break;
	}
	$k++;
	// If there is more than 1 image attachment in a gallery
	if ( count( $attachments ) > 1 ) {
		if ( isset( $attachments[ $k ] ) )
			// get the URL of the next image attachment
			$next_attachment_url = get_attachment_link( $attachments[ $k ]->ID );
		else
			// or get the URL of the first image attachment
			$next_attachment_url = get_attachment_link( $attachments[ 0 ]->ID );
	} else {
		// or, if there's only 1 image attachment, get the URL of the image
		$next_attachment_url = wp_get_attachment_url();
	}
?>
						<p><a href="<?php echo $next_attachment_url; ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php
							$attachment_size = apply_filters( 'twentyten_attachment_size', 900 );
							echo wp_get_attachment_image( $post->ID, array( $attachment_size, 9999 ) ); // filterable image width with, essentially, no limit for image height.
						?></a></p>

							<?php previous_image_link( false ); ?>
							<?php next_image_link( false ); ?>
<?php else : ?>
						<a href="<?php echo wp_get_attachment_url(); ?>" title="<?php echo esc_attr( get_the_title() ); ?>" rel="attachment"><?php echo basename( get_permalink() ); ?></a>
<?php endif; ?>
						<?php if ( !empty( $post->post_excerpt ) ) the_excerpt(); ?>

<?php the_content( __( 'Continue reading &rarr;', 'twentyten' ) ); ?>
                                                				<p><a href="<?php echo get_permalink( $post->post_parent ); ?>" title="<?php esc_attr( printf( __( 'Return to %s', 'twentyten' ), get_the_title( $post->post_parent ) ) ); ?>" rel="gallery"><?php
					/* translators: %s - title of parent post */
					printf( __( '<span>&larr;</span> %s', 'twentyten' ), get_the_title( $post->post_parent ) );
				?></a></p>
<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

						<?php edit_post_link( __( 'Edit', 'twentyten' ), ' ', '' ); ?>

    </div>
        				<?php layout::side( 'right' , 0 , 'attachment' ); ?>

<?php endwhile; ?>
    
        
    </div>
</section>
<?php get_footer();?>