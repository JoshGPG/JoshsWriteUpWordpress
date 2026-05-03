<?php
/**
 * Template part for displaying post excerpts in listings.
 *
 * @package Joshs_WriteUp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium_large' ); ?>
			</a>
		</div>
	<?php endif; ?>

	<div class="post-card-inner">
		<header class="entry-header">
			<?php
			$categories = get_the_category();
			if ( ! empty( $categories ) ) :
			?>
				<a class="category-badge" href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
					<?php echo esc_html( $categories[0]->name ); ?>
				</a>
			<?php endif; ?>

			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			<div class="entry-meta">
				<span class="posted-on">
					<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				</span>
				<span class="byline">
					<?php
					printf(
						/* translators: %s: author name */
						esc_html__( 'by %s', 'joshs-writeup' ),
						'<span class="author vcard"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
					);
					?>
				</span>
			</div>
		</header>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>

		<a class="continue-reading" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Continue Reading', 'joshs-writeup' ); ?> &rarr;
		</a>

		<footer class="entry-footer">
			<?php
			$categories_list = get_the_category_list( esc_html__( ', ', 'joshs-writeup' ) );
			if ( $categories_list ) {
				printf( '<span class="cat-links">' . esc_html__( 'In %s', 'joshs-writeup' ) . '</span>', $categories_list );
			}
			?>
		</footer>
	</div>
</article>
