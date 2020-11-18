<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	  	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
       
		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

<img class="bigEllipse " src="<?php echo get_template_directory_uri();?>/assets/images/Ellipse.png" ></div> 
<img class="vector cssanimation leFadeIn random" src="<?php echo get_template_directory_uri();?>/assets/images/VectorBottom.png" ></div> 
<img class="vectorMiddle cssanimation leFadeIn random" src="<?php echo get_template_directory_uri();?>/assets/images/Vectormiddle.png" ></div> 
<img class="vectorTop cssanimation leFadeIn random" src="<?php echo get_template_directory_uri();?>/assets/images/VectorTop.png" ></div> 
<img class="datebase cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/database1.png" ></div> 
<img class="datebase2 cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/database2.png" ></div> 
<img class="calculator cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/calculator.png" ></div> 
<img class="keys cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/keys.png" ></div> 
<img class="keys2 cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/keys2.png" ></div> 
<img class="devision5 cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/division5.png" ></div> 

<img class="devision6 cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/division6.png" ></div>

<img class="add cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/add2.png" ></div> 

<img class="add1 cssanimation leFadeIn sequence" src="<?php echo get_template_directory_uri();?>/assets/images/add1.png" ></div>
			<!-- <div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<php

					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<php twentytwenty_the_theme_svg( 'search' ); >
								</span>
								<span class="toggle-text"><php _e( 'Search', 'twentytwenty' ); ?></span>
							</span>
						</button><! .search-toggle ->

					<php } >

					<div class="header-titles">

						<php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>

					</div><! .header-titles->

					<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
							</span>
							<span class="toggle-text"><php _e( 'Menu', 'twentytwenty' ); ?></span>
						</span>
					</button><! .nav-toggle >

				</div><! .header-titles-wrapper >

				<div class="header-navigation-wrapper">

					<php
					if ( has_nav_menu( 'primary' ) || ! has_nav_menu( 'expanded' ) ) {
						?>

							<nav class="primary-menu-wrapper" aria-label="<?php esc_attr_e( 'Horizontal', 'twentytwenty' ); ?>" role="navigation">

								<ul class="primary-menu reset-list-style">

								<php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

								</ul>

							</nav><- .primary-menu-wrapper ->

						<php
					}

					if ( true === $enable_header_search || has_nav_menu( 'expanded' ) ) {
						?>

						<div class="header-toggles hide-no-js">

						<php
						if ( has_nav_menu( 'expanded' ) ) {
							?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><php _e( 'Menu', 'twentytwenty' ); ?></span>
										<span class="toggle-icon">
											<php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
										</span>
									</span>
								</button><!- .nav-toggle ->

							</div><!- .nav-toggle-wrapper ->

							<php
						}

						if ( true === $enable_header_search ) {
							?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<php twentytwenty_the_theme_svg( 'search' ); ?>
										<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
									</span>
								</button><!- .search-toggle ->

							</div>

							<php
						}
						?>

						</div><!- .header-toggles ->
						<php
					}
					?>

				</div><!- .header-navigation-wrapper ->

			</div><!- .header-inner ->

			<php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			> -->
<nav class="navbar navbar-expand-lg navbar-light " style=" background: rgba(255, 255, 255, 0.3) !important">
  <a class="navB1C" href="#">1C |<div class="navBr"><div>ОБЛАЧНАЯ</div><div>БУХГАЛТЕРИЯ</div>  </div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class=" navbarText" href="#">Программы <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class=" navbarText"  href="#">Тарифы</a>
      </li>
      <li class="">
        <a class=" navbarText" href="#">О компании</a>
	  </li>
	  <li class="nav-item">
        <a class=" navbarText"  href="#">Клиенты</a>
      </li>
      <li class="">
        <a class=" navbarText" href="#">Помощь</a>
      </li>
    </ul>
    <span class="navbar-text" style="color:white;font-family: Montserrat;
font-style: normal;
font-weight: bold;
font-size: 15px;
line-height: 18px;
letter-spacing: 0.1em;">
     +998 (00) 111 22 33
    </span>
  </div>
</nav>
<div class="continer">
	<div class="row">
		<div class="col">
			<div class="container mainCon">
         <p class="mainTitle animate__backInDown">Аренда 1С  в облаке от AKFA
IT-Centre это
		</p>
       <div style="display: flex;"><img style="width:20px; height:20px; margin-right:10px" src="<?php echo get_template_directory_uri();?>/assets/images/titleelement.png" ><p class="TitleColor">Удобный сервис для удаленной работы в 1С                               
		</p>
		</div>
		<div style="display: flex;"><img style="width:20px; height:20px; margin-right:10px" src="<?php echo get_template_directory_uri();?>/assets/images/titleelement.png" ><p class="TitleColor">Резервирование данных и безопасность работы
		</p></div>
		<div style="display: flex;"><img style="width:20px; height:20px; margin-right:10px" src="<?php echo get_template_directory_uri();?>/assets/images/titleelement.png" ><p class="TitleColor">Грамотная техническая поддержка 24/7
		</p></div>
	</div>
		</div>
		<div class="col">
         <img  src="<?php echo get_template_directory_uri();?>/assets/images/Business.png" class="img-responsive">
		</div>
	</div>
	
<div class="card mx-auto" style="width:550px; height:150px; bottom:-70px; border-radius:15px;text-align:center">
<div class="card-body">	
	<div class="mt-3">
<span style="text-align:center">За пределами стереотипов, развивайтесь вместе с нами</span>
</div>
<div class="mt-3">	
<span>оставить заявку</span>
</div>
<div class="mt-4">
	<button type="button" class="btn btn-danger"> Попробовать 14 дней бесплатно.</button>
</div>	
</div>
</div>

</div>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
