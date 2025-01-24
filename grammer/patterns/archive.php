<?php
/**
 * Title: archive
 * Slug: grammer/archive
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Wrapper"},"style":{"spacing":{"margin":{"top":"0vh","bottom":"0vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0vh;margin-bottom:0vh"><!-- wp:query-title {"type":"archive","align":"wide"} /-->

<!-- wp:query {"queryId":1,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":6}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":"","align":"wide"} /-->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"style":{"spacing":{"margin":{"bottom":"1.5rem"}}},"fontSize":"small"} /-->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"Pagination"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","style":{"typography":{"fontSize":"2rem","letterSpacing":"0px"}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"label":"Newer Posts"} /-->

<!-- wp:query-pagination-next {"label":"Older Posts"} /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"bottom":"2vh"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:2vh"><!-- wp:paragraph -->
<p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'grammer');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->