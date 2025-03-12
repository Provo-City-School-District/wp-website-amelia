<?php
// gather child theme variables
$theme_vars = my_theme_variables();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-0JSNW78RE0"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', '<?= $theme_vars['google_tag_manager_id'] ?>');
	</script>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if (is_home()) { ?>News | <?php } ?><?php if (is_page()) {
															the_title(); ?> | <?php } ?><?php if (is_single()) {
																							the_title(); ?> | <?php } ?><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:700,900" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/slick/slick.css' ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/assets/slick/slick-theme.css' ?>" />
	<link href="https://customer.cludo.com/css/templates/v1.1/essentials/cludo-search.min.css" type="text/css" rel="stylesheet">
	<?php wp_head(); ?>
</head>


<body>
	<a class="skip-to-link" href="#trp-floater-ls">Skip to Translation</a>
	<a class="skip-to-link" href="#mainMenu">Skip to Main Menu</a>
	<a class="skip-to-link" href="#contentArea">Skip to Main Content</a>
	<header id="pcsdBranding">
		<img src="<?php echo get_template_directory_uri() . '/assets/icons/pcsd-logo-website-header-branding.png' ?>" alt="Provo City School District Logo" />
		<h1><a href="https://provo.edu">Provo City School District</a></h1>
	</header>
	<header id="mainHeader">
		<div>
			<a href="<?php bloginfo('siteurl'); ?>"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/header-logo.png'; ?>" alt="Elem" id="siteLogo" /></a>
		</div>
		<div>
			<a href="<?php bloginfo('siteurl'); ?>">
				<h1><?= $theme_vars['full_school_name'] ?></h1>
			</a>
		</div>
		<!-- Search Form -->
		<div class="headerSearch">
			<a href="<?php echo bloginfo('url'); ?>/search"><img src="<?php echo get_template_directory_uri() . '/assets/icons/search-lt.svg'; ?>" alt="Search" /></a>
		</div>

		<nav id="mainMenu" role="navigation">
			<input type="checkbox" id="reveal-menu" role="button" aria-labelledby="menu-label">
			<label id="menu-label" class="mobileMenu" for="reveal-menu"><img src="<?php echo get_template_directory_uri() . '/assets/icons/menu.svg'; ?>" alt="" />Menu</label>
			<?php get_template_part('mainmenu'); ?>
		</nav>
	</header>