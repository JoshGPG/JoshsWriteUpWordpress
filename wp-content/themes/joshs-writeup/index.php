<?php
/**
 * The main template file.
 *
 * @package Joshs_WriteUp
 */

get_header();
?>

<main id="primary" class="site-main">
	<?php
	// Featured Stories — show sticky posts in a hero section on the front page.
	if ( is_home() && ! is_paged() ) :
		$sticky_ids = get_option( 'sticky_posts' );
		if ( ! empty( $sticky_ids ) ) :
			$featured_query = new WP_Query( array(
				'post__in'            => $sticky_ids,
				'ignore_sticky_posts' => 1,
				'posts_per_page'      => 3,
			) );

			if ( $featured_query->have_posts() ) :
			?>
				<section class="featured-stories">
					<span class="featured-stories-heading"><?php esc_html_e( 'Top Stories', 'joshs-writeup' ); ?></span>
					<?php
					while ( $featured_query->have_posts() ) :
						$featured_query->the_post();
						$has_thumb = has_post_thumbnail();
					?>
						<div class="featured-story-card<?php echo $has_thumb ? '' : ' no-image'; ?>">
							<a href="<?php the_permalink(); ?>">
								<?php if ( $has_thumb ) : ?>
									<div class="featured-story-image">
										<?php the_post_thumbnail( 'joshs-writeup-featured' ); ?>
									</div>
								<?php endif; ?>
								<div class="featured-story-overlay">
									<span class="top-story-badge"><?php esc_html_e( 'Top Story', 'joshs-writeup' ); ?></span>
									<h2 class="featured-story-title"><?php the_title(); ?></h2>
									<p class="featured-story-meta">
										<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
									</p>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</section>
			<?php
			endif;
			wp_reset_postdata();
		endif;
	endif;
	?>

	<div class="content-area">
		<div class="posts-container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();

					// Skip sticky posts in the main loop since they're shown above.
					if ( is_home() && is_sticky() && ! is_paged() ) {
						continue;
					}

					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;

				the_posts_navigation();
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
			?>
		</div>

		<?php get_sidebar(); ?>
	</div>
</main>

<?php
get_footer();
