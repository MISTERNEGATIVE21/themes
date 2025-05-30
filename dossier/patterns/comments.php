<?php
/**
 * Title: Comments
 * slug: dossier/comments
 * inserter: no
 */
?>
<!-- wp:comments {"align":"wide","className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments alignwide wp-block-comments-query-loop"><!-- wp:comments-title {"level":1} /-->

<!-- wp:spacer {"height":"var:preset|spacing|60"} -->
<div style="height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"2.5vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:2.5vh"><!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"48px"},"color":{"duotone":["#706b6d","#fcfcf8"]}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"format":"F j, Y \\a\\t g:i a"} /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:comments-pagination-previous {"label":"<?php esc_html_e('Older', 'dossier');?>"}./-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next {"label":"<?php esc_html_e('Newer', 'dossier');?>"}./-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments -->
