<?php
/**
 * Template part for displaying a message when no posts are found.
 *
 * @package Joshs_WriteUp
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'joshs-writeup' ); ?></h1>
	</header>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p>
				<?php
				printf(
					/* translators: %s: link to new post admin page */
					wp_kses( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'joshs-writeup' ), array( 'a' => array( 'href' => array() ) ) ),
					esc_url( admin_url( 'post-new.php' ) )
				);
				?>
			</p>
		<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, nothing matched your search terms. Please try again with different keywords.', 'joshs-writeup' ); ?></p>
			<?php get_search_form(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'joshs-writeup' ); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div>
</section>
