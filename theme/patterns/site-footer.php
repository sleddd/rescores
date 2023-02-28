<?php
/**
 * Title: Default Footer
 * Slug: rescored/site-footer
 * Categories: footer
 */
?>
<!-- wp:group {"backgroundColor":"black","layout":{"type":"constrained","tagName":"footer","className":"footer"}} -->
	<div class="wp-block-group has-black-background-color has-background">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","right":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10"}}},"className":"alignfull","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|link-hover"}}}},"fontSize":"medium"} /-->
				<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-hover"}}}},"textColor":"gray-dark","className":"italic text-sm"} -->
					<p class="has-text-align-right italic text-sm has-gray-dark-color has-text-color has-link-color">
					<?php echo do_shortcode( '[footer_attr text="a code cat" link="https://github.com/sleddd/rescores"/]' ); ?>
					</p>
				<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
	</div>
<!-- /wp:group -->