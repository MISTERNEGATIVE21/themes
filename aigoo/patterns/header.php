<?php
/**
 * Title: header
 * Slug: aigoo/header
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"custom-light","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-custom-light-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2.25vh","top":"6vh","right":"0vw","left":"0vw"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:6vh;padding-right:0vw;padding-bottom:2.25vh;padding-left:0vw"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"textTransform":"uppercase","fontSize":"13px","letterSpacing":"0.05em"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontFamily":"metropolis"} -->
<div class="wp-block-group has-metropolis-font-family" style="font-size:13px;letter-spacing:0.05em;text-transform:uppercase"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Subscribe</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Newsletter</a>', 'aigoo' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"custom-light","overlayTextColor":"contrast","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"5vh","top":"2vh","right":"0vw","left":"0vw"}},"border":{"top":{"style":"none","width":"0px"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;padding-top:2vh;padding-right:0vw;padding-bottom:5vh;padding-left:0vw"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
