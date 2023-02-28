<?php
/**
 * Title: Default Footer
 * Slug: rescored/site-footer
 * Categories: footer
 */
?>
<!-- wp:group {"style":{"color":{"background":"#f1f5f9"},"border":{"top":{"color":"var:preset|color|gray-md","width":"1px"}}},"className":"has-background","layout":{"type":"constrained","tagName":"footer","className":"footer"}} -->
	<div class="wp-block-group has-background" style="border-top-color:#e2e8f0;border-top-width:1px;background-color:#f1f5f9">
		<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10"}}},"className":"alignfull","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignfull" style="padding-right:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
				<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|link-active"}}}},"fontSize":"medium"} /-->
				<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-active"}}}},"textColor":"gray-dark","className":"italic text-sm"} -->
				<p class="has-text-align-right italic text-sm has-gray-dark-color has-text-color has-link-color">
						<?php echo do_shortcode( '[footer_attr text="a code cat" link="https://github.com/sleddd/rescores"/]' ); ?>
					</p>
				<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
	</div>
<!-- /wp:group -->