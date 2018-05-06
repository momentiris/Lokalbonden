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



/**
* create_post_type - Creates custom post types.
*
* @param  [string] $name
* @param  [string] $nameSingular
* @return [void]
*/
add_action('CPT', 'create_post_type', 10, 2);

function create_post_type($name, $nameSingular)
{
    register_post_type(
      $name,
  array(
    'labels' => array(
      'name' => __($name),
      'singular_name' => __($nameSingular)
    ),
    'public' => true,
    'has_archive' => true,

  )
);
}

// Requires array of CPTs and executes the loop. See custom_post_types/customposttypes.php.
require('custom_post_types/customposttypes.php');


/**
* Adds custom user role and privileges
*
* @return [I have no god damn idea.]
*/
add_role(
    'master',
    __('Master'),
array(
  'read' => true, // true allows this capability
  'edit_posts' => true, // Allows user to edit their own posts
  'edit_pages' => true, // Allows user to edit pages
  'edit_others_posts' => true, // Allows user to edit others posts not just their own
  'create_posts' => false, // Allows user to create new posts
  'manage_categories' => false, // Allows user to manage post categories
  'publish_posts' => true, // Allows the user to publish, otherwise posts stays in draft mode
  'edit_themes' => false, // false denies this capability. User can’t edit your theme
  'install_plugins' => false, // User cant add new plugins
  'update_plugin' => false, // User can’t update any plugins
  'update_core' => false // user cant perform core updates
)
);

// Adding fontawesome icons
function wmpudev_enqueue_icon_stylesheet() {
wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );
