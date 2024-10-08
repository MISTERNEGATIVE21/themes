<?php
/**
 * Title: sidebar
 * Slug: colorloops/sidebar
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium","fontFamily":"overpass-mono"} -->
<h3 class="wp-block-heading has-overpass-mono-font-family has-medium-font-size" style="text-transform:uppercase"><?php esc_html_e('From the blog', 'colorloops');?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":19,"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"inherit":false}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"large"} /-->

<!-- wp:post-date {"style":{"typography":{"textTransform":"capitalize"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium","fontFamily":"overpass-mono"} -->
<h3 class="wp-block-heading has-overpass-mono-font-family has-medium-font-size" style="text-transform:uppercase"><?php esc_html_e('About the author', 'colorloops');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Sophia Bennett is an art historian and freelance writer with a passion for exploring the intersections between nature, symbolism, and artistic expression. With a background in Renaissance and modern art, Sophia enjoys uncovering the hidden meanings behind iconic works and sharing her insights with art lovers of all levels. When she’s not visiting museums or researching the latest trends in contemporary art, you can find her hiking in the countryside, always chasing the next rainbow.', 'colorloops');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->