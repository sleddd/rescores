<?php
/**
 * Title: Custom Header
 * Slug: rescores/custom-header
 * Categories: header
 */
?>
<!-- wp:group {"tagName":"header","className":"alignfull header shadow-lg bg-gray-50"} -->
<header class="wp-block-group alignfull rs-header shadow-lg bg-gray-50"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0","top":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0"><!-- wp:group {"className":"site-info","layout":{"type":"flex"}} -->
<div class="wp-block-group site-info"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"logo"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"fontSize":"medium"} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:html -->
<nav aria-label="<?php _e( 'Primary Site Navigation', '_rs' ); ?>" class="navbar" id="navbar">
	<button class="menu-toggle" aria-controls="primary-menu" aria-label="Toggle open primary menu">
		<div class="sr-only"><?php esc_html_e( 'Mobile Menu Toggle Button', '_rs' ); ?></div>
		<div class="bar"></div>
		<div class="bar"></div>
		<div class="bar"></div>
	</button>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>
</nav>
<!-- /wp:html --></header>
<!-- /wp:group -->