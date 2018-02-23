<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d9aea">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

    <header>
        <nav role="navigation">
            <!-- If we want to use a Hamburger-menu and its onclick-animation:
            Comment out this section and activate the hamburger.js script in
            the resources section-->

            <!-- <button class="hamburger hamburger--spin" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button> -->
    <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
</nav>
</header>
