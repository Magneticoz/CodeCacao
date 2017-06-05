<?php
/**
 * The template for displaying the header
 *
 *
 * @package WordPress
 * @subpackage CodeCacao
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> cz-shortcut-listen="true">
<!-- Navbar -->
<nav class="navbar navbar-default">
	<div class="navbar-header">
			<!--button id="menu-toggle" type="button" class="navbar-toggle" onclick="openNav()"><!-- data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
			</button-->
			<?php 
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
			?>
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php echo $image; ?>"></a>
	</div>
	<?php
		wp_nav_menu(array('menu' => 'Social Links Menu', 'container' => 'ul', 'menu_class' => 'nav navbar-nav hidden-xs'));
	?>
	<!--ul class="nav navbar-nav hidden-xs">
			<li><a href="https://www.facebook.com/Codecacao-1780399962277874/" target="_blank"><img src="images/facebook.png"></a></li>
			<li><a href="https://twitter.com/Codecacao1" target="_blank"><img src="images/twitter.png"></a></li>
			<li><a href="https://www.linkedin.com/in/code-cacao-3711a8139/" target="_blank"><img src="images/linkedin.png"></a></li>
			<li><a href="mailto:hello@codecacao.com"><img src="images/contact.png"></a></li>
	</ul>
	<div id="menu" class="menu" style="width: 0px;">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
		<ul>
				 <li><a href="about.html">About us</a></li>
				 <li><a href="join_us.html">Join us</a></li>
				 <li><a href="work.html">Our work</a></li>
				 <li><a href="contact.html">Contact us</a></li>
		</ul>   
	</div-->
</nav>
<!-- End navbar -->
