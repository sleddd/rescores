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
	if ( ! empty( $template_name ) ) {
		$template = get_block_template( 'rescores/theme//' . $template_name, 'wp_template' );
		if ( is_object( $template ) && property_exists( $template, 'content' ) ) {
			echo do_blocks( $template->content );
		}
	}
}