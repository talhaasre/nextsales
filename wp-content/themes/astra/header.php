<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
	<?php
	if (apply_filters('astra_header_profile_gmpg_link', true)) {
	?>
		<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	}
	?>
	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<div id="loader">Loading...</div>

<div id="content" class="site-content" style="display:none;">
	<header class="site-header masthead" id="masthead">
		<div class="my_container">
			<div class="header-wrap">
				<nav class="desktop-header">
					<a href="<?php echo get_site_url() . "/" ?>" class="logo-wrapper">
						<img width="400" height="106" src="<?php echo get_template_directory_uri() . "/assets/images/header/logo.svg" ?>"
							alt="logo" class="logo">
					</a>
					<nav class="navlist">
						<a href="" class="navlink">About Us</a>
						<a href="" class="navlink">FAQ's</a>
					</nav>
					<a href="" class="signup-wrap common-cta">Sign Up</a>
				</nav>
			</div>
		</div>
	</header>
</div>
</body>