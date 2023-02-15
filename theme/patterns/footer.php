<?php
/**
 * Title: Default Footer
 * Slug: rescored/footer
 * Categories: footer
 */
?>
<!-- wp:group {"layout":{"type":"constrained", "tagName": "footer", "className": "footer"}} -->
<footer class="wp-block-group">
	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"alignfull","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:paragraph {"align":"right"} -->
			<p class="has-text-align-right italic text-sm">
				<?php
				printf(
					/* Translators: WordPress link. */
					esc_html__( 'Powered by %s', '_rs' ),
					'<a href="' . esc_url( __( 'https://github.com/sleddd', '_rs' ) ) . '" rel="nofollow">a code cat.</a>'
				)
				?>
				&copy; 2023 
			</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</footer>
<!-- /wp:group -->
