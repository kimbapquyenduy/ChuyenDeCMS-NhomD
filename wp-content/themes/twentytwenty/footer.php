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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>