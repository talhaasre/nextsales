<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
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
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>

<!-- CUSTOM FOOTER AREA START-->
<!-- CUSTOM FOOTER AREA START-->
<?php
function currentYear()
{
	return date('Y');
}
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . "/assets/css/footer.css" ?>">

<section class="custom_footer">
	<div class="my_container">
		<div class="footer-wrap">
			<nav class="desktop-footer">
				<a href="<?php echo get_site_url() . "/" ?>" class="logo-wrapper">
					<img width="400" height="106" src="<?php echo get_template_directory_uri() . "/assets/images/header/logo.svg" ?>"
						alt="logo" class="logo">
				</a>
				<nav class="navlist">
					<a href="" class="navlink">About Us</a>
					<a href="" class="navlink">FAQ's</a>
				</nav>
				<div class="social_wrap">
					<a href="" class="social_link">
						<img width="24" height="24" src="<?php echo get_template_directory_uri() . "/assets/images/footer/twitter.svg" ?>" alt="" class="social_icon" loading="lazy">
					</a>
					<a href="" class="social_link">
						<img width="24" height="24" src="<?php echo get_template_directory_uri() . "/assets/images/footer/facebook.svg" ?>" alt="" class="social_icon" loading="lazy">
					</a>
					<a href="" class="social_link">
						<img width="24" height="24" src="<?php echo get_template_directory_uri() . "/assets/images/footer/instagram.svg" ?>" alt="" class="social_icon" loading="lazy">
					</a>
				</div>
			</nav>
			<div class="copyright_wrap">
				<div class="copy_box">&#169;Copyright <?php echo currentYear(); ?>. All Rights Reserved</div>
				<div class="copy_box">
					<a href="" class="navlink">Privacy Policy</a>
					<a href="" class="navlink">Terms & Conditions</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- CUSTOM FOOTER AREA END -->
<!-- CUSTOM FOOTER AREA END -->


</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>