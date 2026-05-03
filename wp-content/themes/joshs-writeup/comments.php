<?php
/**
 * The template for displaying comments.
 *
 * @package Joshs_WriteUp
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$joshs_writeup_comment_count = get_comments_number();
			if ( '1' === $joshs_writeup_comment_count ) {
				printf(
					/* translators: %s: post title */
					esc_html__( 'One comment on &ldquo;%s&rdquo;', 'joshs-writeup' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf(
					/* translators: 1: comment count, 2: post title */
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $joshs_writeup_comment_count, 'comments title', 'joshs-writeup' ) ),
					number_format_i18n( $joshs_writeup_comment_count ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol>

		<?php
		the_comments_navigation();

		if ( ! comments_open() ) :
		?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'joshs-writeup' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>

	<?php comment_form(); ?>
</div>
