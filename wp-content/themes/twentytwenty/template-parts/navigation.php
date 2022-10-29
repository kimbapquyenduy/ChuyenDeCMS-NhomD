<?php

/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) {

	$pagination_classes = '';

	if (!$next_post) {
		$pagination_classes = ' only-one only-prev';
	} elseif (!$prev_post) {
		$pagination_classes = ' only-one only-next';
	}

?>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- code fix Prev - Next Post -->
	<div class="container-navigation">
		<h2 href="">Category</h2>
		<!-- <p> -->

		<?php
		if ($prev_post) {
		?>

			<a class="previous-post" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
				<span class="arrow" aria-hidden="true">
					<div class="containerr">
						<div class="row">
							<div class="col-0">
								<div class=" row">1</div>
								<div class=" row gachchan">2</div>
							</div>
							<div class="col-1">
								<div class="row" style="margin-top: 12px;">32</div>
							</div>
							<div class="col-10">
								<div class="row" style="margin-top: 10px;">
									<span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($prev_post->ID)); ?></span>
								</div>
							</div>
						</div>
					</div>
				</span>
				<!-- icon    -->

				</span>
			</a>

		<?php
		}
		?>
		<!-- </p> -->

		<!-- <p> -->
		<?php
		if ($next_post) {
		?>
			<a class="next-p" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
				<span class="arrow" aria-hidden="true">
					<div class="containerr">
						<div class="row">
							<div class="col-0">
								<div class=" row">1</div>
								<div class=" row gachchan">2</div>
							</div>
							<div class="col-1">
								<div class="row" style="margin-top: 12px;">32</div>
							</div>
							<div class="col-10">
								<div class="row" style="margin-top: 10px;"><span class="title"><span class="title-inner"><?php echo wp_kses_post(get_the_title($next_post->ID)); ?></span></div>
							</div>
						</div>
					</div>
				</span>
				</span>
			</a>
		<?php
		}
		?>
		<!-- </p> -->
	</div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php

}
