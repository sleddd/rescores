<?php

 /**
 * Shortcode for footer attributions.
 */
function _rs_footer_attr( $atts ) {
	shortcode_atts(
		array(
			'text' => '',
			'link' => '#',
		),
		$atts,
		'footer_attr'
	);

	$footer_attr = sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Powered by %s', '_rs' ),
		'<a href="' . esc_url( $atts['link'] ) . '" rel="nofollow">' . esc_attr( $atts['text'] ) . '</a>' . ' &copy;' . wp_date( 'Y' ),
	);
	return $footer_attr;
}
add_shortcode( 'footer_attr', '_rs_footer_attr' );
