<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AllesvdK-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site bs-wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'allesvdk-theme' ); ?></a>

	<div class="uk-container">
		<header id="masthead" class="site-header bs-header">

			<!-- FOR SMALL -->
			<div class="uk-flex uk-flex-between uk-hidden@m bs-header__box-small">
				<div class="site-branding bs-header__logo">
					<?php
					the_custom_logo(); ?>
				</div><!-- .site-branding -->

				<!-- MENU-ICON FOR SMALL -->
				<div class="bs-navi__small uk-hidden@m">
				<a class="bs-navi__icon" href="#offcanvas-nav" uk-toggle uk-icon="icon: menu; ratio: 1.5"></a>
				</div>

			</div>

			<div class="site-branding bs-header__logo uk-visible@m">
				<?php
				the_custom_logo(); ?>
			</div><!-- .site-branding -->


			<div class="bs-navi">
				<ul class="bs-navi__list">
					<li class="bs-navi__item">
						<a href="https://www.facebook.com/allesvoordekunsten/" uk-icon="icon: facebook"></a>
					</li>
					<li class="bs-navi__item">
						<a href="mailto:info@allesvoordekunsten.nl" uk-icon="icon: mail"></a>
					</li>
					<li class="bs-navi__item">
						<div class="bs-navi__search">
							<?php get_search_form(); ?>
						</div>
					</li>
				</ul>

				<nav id="site-navigation" class="bs-navi bs-navi--main">

					<div id="offcanvas-nav" uk-offcanvas class="bs-navi__offcanvas uk-hidden@m">
						<div class="uk-offcanvas-bar">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'			 => '',
								'menu_class'		 => 'bs-navi__list'
							) ); ?>
						</div>
					</div>

					<div class="uk-visible@m">
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'			 => '',
							'menu_class'		 => 'bs-navi__list'
						) ); ?>
					</div>


				</nav><!-- #site-navigation -->
			</div><!-- .bs-navi -->

		</header><!-- #masthead -->
	</div>


	<div class="uk-container">
		<div id="content" class="site-content">
