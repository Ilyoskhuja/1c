<?php
/**
 * The template for displaying single posts and pages.
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
	<div class="container">
		<div class="row">
			<div class="col-5">
				<div class="contentImg">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/Business.png" >
				</div>
				<div style="text-align:center"> 
					
	<button type="button" class="btn btn-danger"> Свяжитесь с нами </button>
				</div>
			</div>
			<div class="col-7">
			
				<div class="col-12 ContentTitle"><p class="cTitle"> Аренда 1С в облаке:“Управление нашей фирмой”
</p>
 <!-- <p class="cTitle"> </p> -->
			
</div>
			
		</div>
	</div>
	<!-- <php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?> -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
