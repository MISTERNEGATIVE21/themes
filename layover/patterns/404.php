<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: layover/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="min-height:100vh"><!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"4rem","top":"4rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:group -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-center" id="oops-that-page-can-t-be-found"><?php echo __('Oops!', 'layover');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide has-text-align-center" id="oops-that-page-can-t-be-found"><?php echo __('That page can’t be found.', 'layover');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php echo __('It looks like nothing was found at this location.<br>Maybe try a search?', 'layover');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"placeholder":"SEARCH","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->