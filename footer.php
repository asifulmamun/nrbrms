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
				<span class="sep">&copy Non-Resident Bangladesh Rights Movement 2018</span>
			</div><!-- .site-info -->
			<div class="footer_social_menu">
				<span>
					<a href="https://facebook.com/asifulmamun">
						<i class="fab fa-facebook-square"></i>
					</a>
				</span>
				<span>
					<a href="https://twitter.com/asifulmamun">
						<i class="fab fa-twitter-square"></i>
					</a>
				</span>
				<span>
					<a href="https://www.instagram.com/asifulmamun">
						<i class="fab fa-instagram"></i>
					</a>
				</span>
			</div>
		</footer><!-- #colophon -->
	</section> <!-- #footer -->

</div><!-- #page -->
<!-- Scroll Top Button -->
<button onclick="scrollTopFunction()" id="scrollTop" title="Go to top"><i class="fa fa-arrow-up"></i></button> 


<div id="window"></div>

<script type="text/javascript">
	

</script>

<?php wp_footer(); ?>

<!-- js -->
<?php require_once('js.php'); ?>
</body>
</html>