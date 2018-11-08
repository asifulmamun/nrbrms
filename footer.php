<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NRB_Rights_Movements
 */
?>

	</div><!-- #content -->
	<section id="footer">
		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nrbrms' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'nrbrms' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'nrbrms' ), 'nrbrms', '<a href="https://plus.google.com/+almamun-asifulmamun">asifulmamun</a>' );
					?>
			</div><!-- .site-info -->


		</footer><!-- #colophon -->
	</section>


</div><!-- #page -->

<?php wp_footer(); ?>

<!-- js -->
<?php require_once('js.php'); ?>
</body>
</html>