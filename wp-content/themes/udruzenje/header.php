<!-- Made by Tarik Miljkovic -->
<!-- 2019 -->

<!doctype html>
<html lang="ba-BS" prefix="og: http://ogp.me/ns#">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <meta name="description" content="Udruženje poduzetnika Velika Kladuša | Izrada: Tarik Miljković">

    <!-- Cache 
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    -->

    <!-- Google Site Verficiation + Sitemap -->

    <!-- Main Stylesheet -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/webfonts/fa-regular-400.svg" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/webfonts/fa-brands-400.svg" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/webfonts/fa-solid-900.svg" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- Social Media -->
    <meta property="og:title" content="Udruženje poduzetnika Velika Kladuša">
    <meta property="og:description" content="Udruženje poduzetnika Velika Kladuša | Izrada: Tarik Miljković">
    <meta property="og:image" content="http://udruzenje.ba">
    <meta property="og:url" content="<?php echo get_bloginfo('template_directory'); ?>/slike/naslovna/jpg/glavna.jpg">

    <?php wp_head(); ?>

  </head>
  <body>

 	<!-- Facebook SDK -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v4.0"></script>

  <!-- Traka -->

  <div class="traka">
      <div class="grid-container">
          <div class="grid-x grid-padding-x track">
            <div class="large-4 cell">Kozaračka 3, Velika Kladuša, BiH</div>
            <div class="large-3 cell">Pon - Pet: 08h - 16h</div>
            <div class="large-3 cell">tel: +387 37 771 700 </div>
            <div class="large-2 cell"><a class="topbar-anchor" href="/postani-clan">Postani član</a></div>
          </div>
        
      </div>
  </div>

	<!-- Website -->

    <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
      <div class="title-bar-title">Meni</div>
    </div>

    <!--  glavni container -->
    <div class="grid-container">

  <!-- navigacija -->
  <header class="top-bar" id="responsive-menu">
      <div class="top-bar-left">
            <a href="<?php echo get_home_url(null,'/'); ?>" class="logo">
              <img src="<?php bloginfo('template_directory');  ?>/slike/logo/logo.svg" alt="">
            </a>
    </div> <!-- end top-bar-left -->
    <div class="top-bar-right">
      <ul class="dropdown menu" data-dropdown-menu>
      	<?php wp_nav_menu(); ?>
      </ul>
      </div> <!-- end top-bar-right -->
  </header> <!-- end navigacija -->

  </div>







