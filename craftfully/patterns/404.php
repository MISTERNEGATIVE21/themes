<?php
/**
 * Title: A 404 page
 * Slug: craftfully/404
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"padding":{"bottom":"180px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60);padding-bottom:180px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found">
<?php echo esc_html_x( 'Oops! That page can’t be found.', 'craftfully' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'It looks like nothing was found at this location. Maybe try a search?', 'craftfully' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"buttonText":"Search","style":{"border":{"radius":"50px","width":"1px"}},"borderColor":"contrast"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->