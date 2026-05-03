<?php
/**
 * Template part for displaying single post content.
 *
 * @package Joshs_WriteUp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		$categories = get_the_category();
		if ( ! empty( $categories ) ) :
		?>
			<a class="category-badge" href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
				<?php echo esc_html( $categories[0]->name ); ?>
			</a>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

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
			<?php if ( function_exists( 'joshs_writeup_reading_time' ) ) : ?>
				<span class="reading-time">
					<?php echo esc_html( joshs_writeup_reading_time() ); ?>
				</span>
			<?php endif; ?>
		</div>
	</header>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'joshs-writeup' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<footer class="entry-footer">
		<?php
		$categories_list = get_the_category_list( ' ' );
		if ( $categories_list ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %s', 'joshs-writeup' ) . '</span>', $categories_list );
		}

		$tags_list = get_the_tag_list( '', ' ' );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %s', 'joshs-writeup' ) . '</span>', $tags_list );
		}
		?>
	</footer>
</article>
