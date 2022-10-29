<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<?php
if(!is_single()){
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php

	get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

    <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

        <div class="entry-content">

            <?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

        </div><!-- .entry-content -->

    </div><!-- .post-inner -->

    <div class="section-inner">
        <?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

    </div><!-- .section-inner -->

    <?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/*
	 * Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

    <div class="comments-wrapper section-inner">

        <?php comments_template(); ?>

    </div><!-- .comments-wrapper -->

    <?php
	}
	?>

</article><!-- .post -->
<?php }
else{
	
	$categories = get_categories( array(
		'orderby' => 'name',
		'parent'  => 0
	) );
	?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
    <div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 categories">
                    <p class="category"><b>Categories</b></p>
                    <div class="list-category">
                        <?php
						foreach ( $categories as $category ) {
							printf( '<i style="font-size:12px;color:#e9df88" class="fa fa-circle" aria-hidden="true"></i> <a href="%1$s">%2$s</a><br/>',
								esc_url( get_category_link( $category->term_id ) ),
								esc_html( $category->name )
							);
						}
						?>
                    </div>
                </div>
                <div class="col-md-6 post_detail">
                    <?php
							$post = get_post(get_the_ID());
							
					$post_date = $post->post_date;
						?>
					<span style="display:flex;">	
                    <h1 class="title"><?php echo $post->post_title; ?></h1>
					<div class="year-m-d" style="border-radius:50%; background:yellow;display:flex;">
					<div class="date">
					<p style="border-bottom:2px solid black;"><?php echo $post_date_day = date('d',strtotime($post_date));	?>	</p>	
 					<?php echo $post_date_month = date('m',strtotime($post_date));	?>
					</div>
					<div class="year" style="margin-top: 20px;margin-left: 10px;">'
					<?php echo $post_date_year = date('y',strtotime($post_date));	?>
					</div>	
					</div>
					</span> 
                    <p class="content_post"><?php echo $post->post_content; ?></p>
                </div>
                <div class="col-md-3 recent_post">
                    <p class="recent"><b>Recent Post</b></p>
                    <ul class="post">
                        <?php
	global $post;

	$myposts = get_posts( array(
		'posts_per_page' => 5,
		'offset'         => 1,
		'category'       => 1
	) );

	if ( $myposts ) {
		foreach ( $myposts as $post ) : 
			setup_postdata( $post ); ?>
                        <li><i style="font-size:7px;color:#e9df88" class="fa fa-circle" aria-hidden="true"></i> <a
                                href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
		endforeach;
		wp_reset_postdata();
	}
	?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php	
	
}
?>