<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" class="header-footer-group">
	<div class="social-icon">
		<i class="fa-brands fa-facebook-f"></i>
		<i class="fa-brands fa-instagram"></i>
		<i class="fa-brands fa-twitter"></i>
		<i class="fa-brands fa-google-plus-g"></i>
		<i class="fa-regular fa-envelope"></i>
	</div>
	<div class="sub-footer-text">

		Báo cáo quá trình nhóm D

	</div>

	<div class="section-inner">

		<div class="footer-credits">

			<p class="footer-copyright">&copy;
				<?php
				echo date_i18n(
					/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
					_x('Y', 'copyright date format', 'twentytwenty')
				);
				?>
				<a href="<?php echo esc_url(home_url('/')); ?>">Nhom D</a>
			</p><!-- .footer-copyright -->

			<?php
			if (function_exists('the_privacy_policy_link')) {
				the_privacy_policy_link('<p class="privacy-policy">', '</p>');
			}
			?>



		</div><!-- .footer-credits -->



	</div><!-- .section-inner -->

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>

</html>