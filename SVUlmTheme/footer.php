<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container" style="height: 50px">
			
			<div style="float:left; line-height: 50px; height: 100%;">&copy; <?php echo date('Y'); ?> SV Ulm 1948</div>
			
			<div style="float:right;">
				<div style="float:left;" class="footer-spacer">
					<a href="https://www.facebook.com/SVU1948/" target="_blank" class="btn btn-circle btn-facebook">
						<span class="fa fa-facebook-square" aria-hidden="true"></span>
					</a>
				</div>
				<div style="float:left;" class="footer-spacer">
					<a href="mailto:GWaffenschmidt@gmx.de" target="_top" class="btn btn-circle btn-contact">
						<span class="fa fa-envelope" aria-hidden="true"></span>
					</a>
				</div>

				<div style="float:left;">
					<a class="btn btn-circle btn-facebook" href="<?php echo esc_url(get_permalink(get_page_by_title('Impressum'))); ?>">
						<span class="fa fa-info" aria-hidden="true"></span>
					</a>
				</div>
				<div style="clear:both"></div>
			</div>
			<div style="clear:both"></div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
