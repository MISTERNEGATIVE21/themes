<?php declare( strict_types = 1 ); ?>
<?php
/**
 * The template for displaying Author Bio
 *
 * @package Dara
 */

if ( ! is_single() ) {
	return;
}
?>

<div class="entry-author">
	<div class="author-avatar">
		<?php
		/**
		 * Filter the author bio avatar size.
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'dara_author_bio_avatar_size', 60 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-heading">
		<h2 class="author-title"><?php printf( esc_html__( 'Published by %s', 'dara' ), '<span class="author-name">' . get_the_author() . '</span>' ); ?></h2>
	</div><!-- .author-heading -->

	<p class="author-bio">
		<?php the_author_meta( 'description' ); ?>
		<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
			<?php printf( esc_html__( 'View all posts by %s', 'dara' ), get_the_author() ); ?>
		</a>
	</p><!-- .author-bio -->
</div><!-- .entry-auhtor -->
