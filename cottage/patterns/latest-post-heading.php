<?php
/**
 * Title: Latest Posts Heading
 * Slug: cottage/latest-post-heading
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0.5rem","margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px"}},"fontSize":"small"} -->
	<h2 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px"><?php echo esc_html__( 'Latest Posts', 'cottage' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:separator -->
	<hr class="wp-block-separator has-alpha-channel-opacity"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
