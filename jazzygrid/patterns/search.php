<?php
/**
 * Title: search
 * Slug: jazzygrid/search
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"dimRatio":0,"isUserOverlayColor":true,"minHeight":90,"minHeightUnit":"vh","isDark":false,"tagName":"main","metadata":{"categories":["hidden"]},"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-cover is-light" style="padding-top:1rem;padding-right:1rem;padding-bottom:1rem;padding-left:1rem;min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"foreground","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background-color has-foreground-background-color has-text-color has-background has-link-color" style="margin-top:0rem;margin-bottom:0rem;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem"><!-- wp:query {"queryId":16,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem","bottom":"2rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:2rem"><!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:query-title {"type":"search"} /-->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"constrained"}} -->
<!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem","margin":{"top":"1rem","bottom":"1rem"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:1rem;margin-bottom:1rem"><!-- wp:post-title /-->

<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('', 'jazzygrid');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div></main>
<!-- /wp:cover -->