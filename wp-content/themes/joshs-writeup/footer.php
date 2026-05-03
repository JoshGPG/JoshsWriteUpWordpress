<?php
/**
 * The footer template.
 *
 * @package Joshs_WriteUp
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer-inner">
			<div class="site-info">
				&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
