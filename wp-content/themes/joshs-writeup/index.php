<?php
/**
 * The main template file.
 *
 * @package Joshs_WriteUp
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="content-area">
		<div class="posts-container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
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
