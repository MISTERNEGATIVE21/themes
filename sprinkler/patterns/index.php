<?php
/**
 * Title: index
 * Slug: sprinkler/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","lock":{"move":false,"remove":true},"layout":{"type":"default"}} -->
<main class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%"} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%"} -->
<div class="wp-block-column" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0.2em"},"typography":{"letterSpacing":"0em","fontSize":"0.8rem","textTransform":"uppercase"}},"layout":{"type":"default"},"fontFamily":"lato"} -->
<div class="wp-block-group has-lato-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:0.8rem;letter-spacing:0em;text-transform:uppercase"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"style":"none","width":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group alignfull" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem;letter-spacing:0.06em"><?php esc_html_e('Categories:', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02em"},"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|40"}},"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":{"color":"var:preset|color|secondary","style":"solid","width":"1px"},"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"},"fontFamily":"fira-code"} -->
<div class="wp-block-group has-fira-code-font-family" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40);font-size:0.8rem;letter-spacing:0.02em"><!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.2em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem"><?php esc_html_e('By', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"fontFamily":"fira-code"} -->
<p class="has-fira-code-font-family" style="font-size:0.8rem"><?php esc_html_e('·', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:query -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->