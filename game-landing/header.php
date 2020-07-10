<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package game-landing
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
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'game-landing' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="grid-container">
				<div class="grid-x align-justify align-middle">
						<div class="cell small-1 logo">

							<?= the_custom_logo(); ?>

						</div>
					<nav class="cell large-7 small-1 main-menu">
						<ul>
							<li><a href="#">main</a></li>
							<li><a href="#">about</a></li>
							<li><a href="#">game features</a></li>
							<li><a href="#">system requirements</a></li>
							<li><a href="#">quotes</a></li>
						</ul>
					</nav>

					<div class="cell small-5 large-2 flexed">
						<div class="language-list">
							<span class="active-language">ENG</span>
							<ul class="list-language">
								<li><a href="#">rus</a></li>
								<li><a href="#">fra</a></li>
								<li><a href="#">deu</a></li>
							</ul>
						</div>

						<div class="icons">
							<a href="#"><img src="<?= get_template_directory_uri() . '/img/xbox_icon.png' ?>" alt="xbox icon"></a>
							<a href="#"><img src="<?= get_template_directory_uri() . '/img/steam_icon.png' ?>" alt="steam icon"></a>
						</div>
						<div class="menu-toggler">
							<img src="<?= get_template_directory_uri() . '/img/menu_icon.png' ?>" alt="menu toggler">
						</div>
					</div>


				</div>
			</div>



		</header><!-- #masthead -->
		<div id="content" class="site-content">
