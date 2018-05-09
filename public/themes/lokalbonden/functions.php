<?php

/*
 * This file is part of Lokalbonden.
 *
 * MIT License, Lokalbonden special squad.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);


// Register plugin helpers.
require template_path('library/plate.php');

// Woocommerce functions
require __DIR__.'/woocommerce-functions.php';
require __DIR__.'/cart-functions.php';

// Set theme defaults.
add_action('after_setup_theme', function () {
    // Show the admin bar.
    show_admin_bar(false);

    if (current_user_can('shop_manager')) {
      // Remove menu items.
      add_theme_support('plate-menu', [
          'edit-comments.php', // comments
          // 'index.php', // dashboard
          'link-manager.php', // links
          'upload.php', // media
          'edit.php', // Posts
          'edit.php?post_type=acf-field-group', // Custom fields
          'tools.php', // Tools
          'admin.php?page=wpcf7', // Contact form plugin
          'users.php', // Users
      ]);
    }


    // Add post thumbnails support.
    add_theme_support('post-thumbnails');

    // Add support for post formats.
    //add_theme_support('post-formats', ['aside', 'audio', 'gallery', 'image', 'link', 'quote', 'video']);

    // Add title tag theme support.
    add_theme_support('title-tag');

    // Add HTML5 support.
    add_theme_support('html5', [
    'caption',
    'comment-form',
    'comment-list',
    'gallery',
    'search-form',
    'widgets',
  ]);


    // Add primary WordPress menu.
    register_nav_menu('primary-menu', __('Primary Menu', 'wordplate'));
    register_nav_menu('checkout-menu', __('Checkout Menu'));
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('wordplate', mix('styles/app.css'));

    wp_register_script('wordplate', mix('scripts/app.js'), '', '', true);
    wp_enqueue_script('wordplate');
});

// Remove JPEG compression.
add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);

// Set custom excerpt more.
add_filter('excerpt_more', function () {
    return '...';
});

// Set custom excerpt length.
add_filter('excerpt_length', function () {
    return 101;
});

// Adding fontawesome icons FRO CARTICON
// NOT USED RIGHT NOW
function wmpudev_enqueue_icon_stylesheet() {
wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );
