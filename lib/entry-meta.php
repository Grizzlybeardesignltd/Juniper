<?php
/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
if ( ! function_exists( 'grizzlybear_entry_meta' ) ) :
	function grizzlybear_entry_meta() {
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( '%s', 'foundationpress' ), get_the_date('d|m|y') ) .'</time>';
	}
endif;
?>