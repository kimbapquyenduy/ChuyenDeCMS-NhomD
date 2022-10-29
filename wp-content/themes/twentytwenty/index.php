<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if (is_search()) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __('Search:', 'twentytwenty') . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ($wp_query->found_posts) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'twentytwenty'
				),
				number_format_i18n($wp_query->found_posts)
			);
		} else {
			$archive_subtitle = __('We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty');
		}
	} elseif (is_archive() && !have_posts()) {
		$archive_title = __('Nothing Found', 'twentytwenty');
	} elseif (!is_home()) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ($archive_title || $archive_subtitle) {
	?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ($archive_title) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post($archive_title); ?></h1>
				<?php } ?>

				<?php if ($archive_subtitle) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post(wpautop($archive_subtitle)); ?></div>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

	<?php
	}


	if (have_posts()) {
		$i = 0;

		if (is_search()) {


			while (have_posts()) {
				the_post();

				// Get posts:
				$_post = get_post();

				// Get post title:
				$post_title = $post->post_title;

				// Get post content:
				$content = $post->post_content;

				$temp = substr(
					$_post->post_content,
					strpos($_post->post_content, "<!-- wp:paragraph -->"),
					strpos($_post->post_content, "<!-- /wp:paragraph -->")
				);

				// Get post url:
				$post_url = get_permalink();

				// Get post image url:
				preg_match('/src="([^"]*)"/', $content, $matches);
				preg_match('/(?<!_)src=([\'"])?(.*?)\\1/', $content, $matches);
				$post_img_element = "";
				if (count($matches) != 0) {
					$post_img_element = "<img $matches[0]>";
				}

				// Get post creation date:
				$day = substr(get_post()->post_date, 8, 2);
				$month = substr(get_post()->post_date, 5, 2);
				$year = substr(get_post()->post_date, 0, 4);

				// Display:
				echo "
				<div class='module5-search-results'>
					<div class='row module5-card-wrapper'>
						<div class='col-md-7 module5-card'>
							<div class='row'>

								<div class='col-md-7 col-xs-7 left-section'>
									<div class='section-wrapper'>
										<div class='img-wrapper'>
											$post_img_element
										</div>
										<div class='creation-date-wrapper'>
											<div class='day'>$day</div>
											<div class='month'>Tháng $month</div><br>
										</div>
									</div>
								</div>
								<div class='col-md-5 col-xs-5 right-section'>
									<div class='content-wrapper'>
										<div class='post-title-wrapper'>
											<a class='post-title' href='$post_url'>$post_title</a>
										</div>
										$temp <a href='$post_url'>[...]</a>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
            	";
			}
		} else {
			while (have_posts()) {
				$i++;
				if ($i > 1 && is_single()) {
					echo '<hr class="post-separator styled-separator is-style-wide section-inner" aria-hidden="true" />';
				}
				the_post();

				get_template_part('template-parts/content', get_post_type());
			}
		}
	} elseif (is_search()) {
	?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'aria_label' => __('search again', 'twentytwenty'),
				)
			);
			?>

		</div><!-- .no-search-results -->

	<?php
	}
	?>

	<?php get_template_part('template-parts/pagination'); ?>

</main><!-- #site-content -->

<?php get_template_part('template-parts/footer-menus-widgets'); ?>

<?php
get_footer();
