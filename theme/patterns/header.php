<?php
/**
 * Title: Default Header
 * Slug: rescored/header
 * Categories: header
 */
?>
<!-- wp:group {"align":"full"},"tagName", "header", "className":"header shadow-lg bg-gray-50","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<header class="wp-block-group alignfull header shadow-lg bg-gray-50"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0","top":"0"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
<!-- wp:group {"layout":{"type":"flex"}, "className":"site-info"} -->
<div class="wp-block-group site-info"><!-- wp:site-logo {"width":60} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"fontSize":"medium"} /-->

<!-- wp:site-tagline {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:html -->
	<nav class="navbar">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <div class="sr-only"><?php esc_html_e( 'Primary Menu Button', '_s' ); ?></div>
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
<!-- /wp:html -->
</header><!-- /wp:group -->
