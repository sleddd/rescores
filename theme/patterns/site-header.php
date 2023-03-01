<?php
/**
 * Title: Header
 * Slug: rescores/site-header
 * Categories: header
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"className":"alignfull header shadow-lg bg-gray-50"} -->
	<header class="wp-block-group alignfull header shadow-lg bg-gray-50" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem">
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0em","right":"1em","bottom":"0em","left":"0em"}}},"className":"site-info","layout":{"type":"flex"}} -->
			<div class="wp-block-group site-info" style="margin-top:0em;margin-right:1em;margin-bottom:0em;margin-left:0em">
				<!-- wp:template-part {"slug":"logo","theme":"rescores"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"left":"0"}}}} -->
				<div class="wp-block-group" style="padding-left:0">
					<!-- wp:site-title /-->
					<!-- wp:site-tagline /-->
				</div>
				<!-- /wp:group -->
			</div>
		<!-- /wp:group -->
        <!-- wp:navigation {"className":"navigation","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|10"}}} /-->
	</header>
<!-- /wp:group -->