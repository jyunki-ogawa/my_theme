<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body class="body" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="global-container">
		<div id="container">
			<div class="mobile-menu__cover"></div>
			<div class="nav-trigger"></div>
			<header class="header">
				<div class="header__inner">
					<div class="header__logo">
						<a href="<?php echo esc_url(home_url('/')); ?>" alt="ロゴ">JUNKI OGAWA</a>
					</div>
					<?php if (is_front_page()) : ?>
						<nav class="header__nav">
							<ul>
								<li><a href="#about-link" alt="about">ABOUT</a></li>
								<li><a href="#project-link" alt="projects">PROJECTS</a></li>
								<li><a href="#article-link" alt="projects">ARTICLE</a></li>
								<li><a href="#contact-link" alt="skill">CONTACT</a></li>
							</ul>
						</nav>
						<button class="mobile-menu__btn">
							<span></span>
							<span></span>
							<span></span>
						</button>
				</div>
				<nav class="mobile-menu">
					<ul class="mobile-menu__content">
						<li class="mobile-menu__item">
							<a href="#about-link" alt="about" class="mobile-menu__nav__link">ABOUT</a>
						</li>
						<li class="mobile-menu__item">
							<a href="#project-link" alt="projects" class="mobile-menu__nav__link">PROJECTS</a>
						</li>
						<li class="mobile-menu__item">
							<a href="#article-link" alt="projects" class="mobile-menu__nav__link">ARTICLE</a>
						</li>
						<li class="mobile-menu__item">
							<a href="#contact-link" alt="skill" class="mobile-menu__nav__link">CONTACT</a>
						</li>
					</ul>
				</nav>
			<?php endif; ?>
			</header>
			<?php if (!is_front_page()) : ?>
				<section class="breadcrumb">
					<div class="breadcrumb__inner">
						<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
							<?php if (function_exists('bcn_display')) {
								bcn_display();
							}
							?>
						</div>
					</div>
				</section>
			<?php endif; ?>