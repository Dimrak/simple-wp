<!DOCTYPE html>
<!-- To set up the language - THIS IS A WORDPRESS FUNCTION -->
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<!-- This provides - loads more styles-function-scripts to the head of this page > -->
	<?php wp_head(); ?>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


</head>
<body>
	<header class="header">
		<div class="container">
			<h1><?php bloginfo('name') ?></h1>
			<!-- This information can be change in Settings > General > Site Tile & Tagline -->
			<span><?php  bloginfo('description') ?></span>
		</div>
	</header>

	<!--MENU-->
	<nav class="mainNav">
		<div class="container">
			<?php 
				$args = array(
					/* theme_location to choose which menu  we want
					 'primary' es el que creamos en functions.php */

					'theme_location' => 'primary'
				)
			?>

				<!-- This makes the navbar appear - without it there is no nav-bar - > only in manual way -->
			<?php wp_nav_menu($args); ?>
		</div>
	</nav>