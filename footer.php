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
		
		<!-- footer widget -->
		<?php dynamic_sidebar( 'footer_1' ); ?>
		
		<!-- footer nav -->
		<?php
			wp_nav_menu( array( 
				'theme_location' => 'footer_menu', 
				'container_class' => 'footer_menu' ) ); 
		?>

		<footer id="colophon" class="site-footer">
			<div class="site-info">
				<!-- footer bottom left -->
				<?php dynamic_sidebar( 'footer_bottom_left' ); ?>
			</div><!-- .site-info -->
			<div class="footer_social_menu">
				<!-- footer bottom right -->
				<?php dynamic_sidebar( 'footer_bottom_right' ); ?>
			</div>
		</footer><!-- #colophon -->
		<i><a style="font-size:10px;color:#0006;font-weight:normal;" title="To know Developer of site click here..!" href="https://facebook.com/asifulmamun">Developer @asifulmamun</a></i>
	</section> <!-- #footer -->
	
</div><!-- #page -->
<!-- Scroll Top Button -->
<button onclick="scrollTopFunction()" id="scrollTop" title="Go to top"><i class="fa fa-arrow-up"></i></button> 
<?php wp_footer(); ?>
<!-- js -->
<?php require_once('js.php'); ?>
</body>
</html>