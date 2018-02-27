<?php

declare(strict_types=1);


// Register plugin helpers.
require template_path('library/plate.php');

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
});

// Enqueue and register scripts the right way.
add_action('wp_enqueue_scripts', function () {
    wp_deregister_script('jquery');

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


// Needed for woocommerce support (Apparently! Not making any difference)
// Maybe remove later if not needed
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


/**
 * Create new post types.
 *
 * @return [void]
 *
 */
add_action( 'CPT', 'create_post_type', 10, 2 );

function create_post_type($name, $nameSingular) {
  register_post_type( $name,
    array(
      'labels' => array(
        'name' => __( $name ),
        'singular_name' => __( $nameSingular )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

// Requires array of CPTs and executes the loop. See custom_post_types/customposttypes.php.
require ('custom_post_types/customposttypes.php');

/**
 * Removes the default textarea section for pages in the
 * wordpress admin interface.
 *
 * @var [???]
 */
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'page';
    remove_post_type_support( $post_type, 'editor');
}
