<?php
/**
 * The template for displaying 404 pages.
 *
 * @package Joshs_WriteUp
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="content-area">
		<div class="posts-container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Page Not Found', 'joshs-writeup' ); ?></h1>
				</header>

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Try a search or browse recent posts below.', 'joshs-writeup' ); ?></p>

					<?php get_search_form(); ?>

					<div class="recent-posts-404">
						<h2><?php esc_html_e( 'Recent Posts', 'joshs-writeup' ); ?></h2>
						<ul>
							<?php
							$recent_posts = wp_get_recent_posts( array(
								'numberposts' => 5,
								'post_status' => 'publish',
							) );
							foreach ( $recent_posts as $post ) :
							?>
								<li><a href="<?php echo esc_url( get_permalink( $post['ID'] ) ); ?>"><?php echo esc_html( $post['post_title'] ); ?></a></li>
							<?php endforeach; wp_reset_postdata(); ?>
						</ul>
					</div>
				</div>
			</section>
		</div>

		<?php get_sidebar(); ?>
	</div>
</main>

<?php
get_footer();
