<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package rescores
 */

 /**
  * Finds and renders a block template.
  */
function _rs_render_block_template( $template_name ) {
	$template = 'rescores';
	if ( strstr( get_stylesheet_directory(), 'rescores/theme' ) ) {
		$template = 'rescores/theme';
	}
	$template = $template . '//' . $template_name;
	if ( ! empty( $template_name ) ) {
		$template = get_block_template( $template, 'wp_template' );
		if ( is_object( $template ) && property_exists( $template, 'content' ) ) {
			echo do_blocks( $template->content );
		}
	}
}
