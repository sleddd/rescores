<?php
/**
 * Title: Default Footer
 * Slug: rescores/site-footer
 * Categories: footer
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"backgroundColor":"gray-lt","className":"footer has-background"} -->
<div class="wp-block-group footer has-background has-gray-lt-background-color" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|10"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10)"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group">
<!-- wp:site-title {"level":0,"style":{"elements":{"link":{"color":{"text":"var:preset|color|link-active"}}}}} /-->

<!-- wp:site-tagline /-->
<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|link-active"}}},"spacing":{"padding":{"top":"var:preset|spacing|30"}}},"textColor":"gray-dark","className":"italic text-sm"} -->
<p class="has-text-align-right italic text-sm has-gray-dark-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--60)">
<?php echo do_shortcode( '[footer_attr text="a code cat" link="https://github.com/sleddd/rescores"/]' ); ?>
</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"right"}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:100%"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"full"} -->
<div class="wp-block-columns alignfull"><!-- wp:column {"width":"350px","style":{"spacing":{"padding":{"top":"0px","right":"var:preset|spacing|40","bottom":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:0px;flex-basis:350px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"fontFamily":"lato"} -->
<h6 class="has-lato-font-family">USEFUL LINKS</h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#">Home</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Contact</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">About</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"250px","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:0;flex-basis:250px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left","wideSize":""}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6,"align":"full","fontFamily":"lato"} -->
<h6 class="alignfull has-lato-font-family">SOCIALS</h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><a href="#">Instagram</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">YouTube</a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#">Twitter</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"340px","style":{"spacing":{"padding":{"right":"var:preset|spacing|70","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"340px"}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--30);flex-basis:340px"><!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":6,"fontFamily":"lato"} -->
<h6 class="has-text-align-left has-lato-font-family">CONTACT US</h6>
<!-- /wp:heading -->

<!-- wp:jetpack/contact-info -->
<div class="wp-block-jetpack-contact-info"><!-- wp:jetpack/email {"email":"email-address"} -->
<div class="wp-block-jetpack-email">email-address</div>
<!-- /wp:jetpack/email -->

<!-- wp:jetpack/phone {"phone":"123 456 7890"} -->
<div class="wp-block-jetpack-phone"><a href="tel:1234567890">123 456 7890</a></div>
<!-- /wp:jetpack/phone -->

<!-- wp:jetpack/address {"address":"123 St","city":"Some City","region":"State","postal":"12345"} -->
<div class="wp-block-jetpack-address"><div class="jetpack-address__address jetpack-address__address1">123 St</div><div><span class="jetpack-address__city">Some City</span>, <span class="jetpack-address__region">State</span> <span class="jetpack-address__postal">12345</span></div></div>
<!-- /wp:jetpack/address --></div>
<!-- /wp:jetpack/contact-info --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->