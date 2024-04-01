<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onaopemipo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Olajide Fagbuji">
    <meta name="generator" content="">
    <title><?php bloginfo("title");?></title>


    <!-- Bootstrap core CSS -->
<link href="<?php bloginfo("template_url"); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="images/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="manifest" href="images/favicons/manifest.json">
    <link rel="mask-icon" href="images/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="images/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
   
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo("template_url"); ?>/css/carousel.css" rel="stylesheet">
    <link href="<?php bloginfo("template_url"); ?>/css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
	<?php if(is_admin_bar_showing()): ?>
		<link href="<?php bloginfo("template_url"); ?>/css/admin-style.css" rel="stylesheet">
	<?php endif; ?>
  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php
    $args = array(
				'theme_location' => 'menu-1',
        'menu_id'        => 'primary-menu',
				'depth'      => 2,
				'container'  => false,
				'menu_class'     => 'navbar-nav mx-auto mb-2 mb-md-0',
				'walker'     => new Bootstrap_Walker_Nav_Menu()
		);	
    $args2 = array(
      'theme_location' => 'menu-3',
      'menu_id'        => 'availability-tabs',
      'depth'      => 2,
      'container'  => false,
      'menu_class'     => 'navbar-nav ms-auto mb-2 mb-md-0',
      'walker'     => new Bootstrap_Walker_Nav_Menu()
  );			
	?>
<header>
  <nav class="navbar navbar-expand-md  fixed-top bg-gray">
    <div class="container-fluid">
      <a class="navbar-brand saira-condensed-semibold" href="#">Onaopemipo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php if (has_nav_menu('menu-1')) : wp_nav_menu($args); else: ?>
        <ul class="navbar-nav mx-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#education" tabindex="-1" >Education</a>
          </li>
        </ul>
      <?php endif; ?>
      <?php if (has_nav_menu('menu-3')) : wp_nav_menu($args); else: ?>
      <div id="availability-tabs">
      <ul class="navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item" >
            <a class="nav-link" href="#" title="North America"><span class="availability-logo north-america"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="Middle East"><span class="availability-logo middle-east"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" title="Nigeria"><span class="availability-logo nigeria"></a>
          </li>
        </ul>
      </div>
      <?php endif;?>
      </div>
    </div>
  </nav>
</header>