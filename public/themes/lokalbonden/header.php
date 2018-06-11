<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#204638">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics CHRISTOPHER -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119399611-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-119399611-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics MARTIN -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120675182-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-120675182-1');
    </script>


</head>
<body <?php body_class(); ?>>
  <nav role="navigation" class="nav">
    <button class="hamburger hamburger--spin" type="button">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>
    <?php
     wp_nav_menu([
      'theme_location' => 'primary-menu',
      'container_class' => 'menu-container',
      'after' => '<svg viewBox="0 0 75 10" preserveAspectRatio="none" class="wobbly_nav"><path d="M.938 5.066s8.08-6.447 16.6-.932c5.99 3.877 9.917 4.117 15.618-.119C38.019.37 40.797 6.412 46.526 5.61 56.222 4.341 58.229.405 62.49 5.066c3.428 4.117 10.969-2.563 10.969-2.563" fill="none"/></svg>'
    ]);
    ?>
  </nav>
<main>
