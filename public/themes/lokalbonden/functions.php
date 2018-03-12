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



/**
* create_post_type - Creates custom post types.
*
* @param  [string] $name
* @param  [string] $nameSingular
* @return [void]
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
* Adds custom user role and privileges
*
* @return [I have no god damn idea.]
*/
add_role( 'master', __( 'Master' ),
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

/**
* woocommerce_support - Adds woocommerce support.
* @return [void]
*/
function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// Make the product-names NOT be links to single product-page
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

// Remove WooCommerce-header (breadcrumb)
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
  remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

// Remove product image from "Kassarna"-page
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

// Change "Add to cart"-text
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
function woo_archive_custom_cart_button_text() {
  global $product;
  $id = $product->get_id();
  if ($id === 44) {
    return __("VÄLJ ".$product->get_name(), "woocommerce");

  } elseif ($id === 50) {
    return __("VÄLJ ".$product->get_name(), "woocommerce");
  }
}

// Add "Short-Description"-text in product loop
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 5);



// Display Fields
add_action('woocommerce_product_options_general_product_data', 'woocommerce_product_custom_fields');

// Save Fields
add_action('woocommerce_process_product_meta', 'woocommerce_product_custom_fields_save');

// Saving Data in the Database
function woocommerce_product_custom_fields()
{
  global $woocommerce, $post;
  echo '<div class="product_custom_field">';
  // Custom Product Text Field
  woocommerce_wp_text_input(
    array(
      'id' => '_custom_product_text_field',
      'placeholder' => 'Delivery Text Field',
      'label' => __('Delivery Text Field', 'woocommerce'),
      'desc_tip' => 'true'
    )
  );
  //Custom Product  Textarea
  woocommerce_wp_textarea_input(
    array(
      'id' => '_custom_product_textarea',
      'placeholder' => 'Product Note Textarea',
      'label' => __('Product Note Textarea', 'woocommerce')
    )
  );
  echo '</div>';

}

function woocommerce_product_custom_fields_save($post_id)
{
  // Custom Product Text Field
  $woocommerce_custom_product_text_field = $_POST['_custom_product_text_field'];
  if (!empty($woocommerce_custom_product_text_field))
  update_post_meta($post_id, '_custom_product_text_field', esc_attr($woocommerce_custom_product_text_field));
  // Custom Product Textarea Field
  $woocommerce_custom_procut_textarea = $_POST['_custom_product_textarea'];
  if (!empty($woocommerce_custom_procut_textarea))
  update_post_meta($post_id, '_custom_product_textarea', esc_html($woocommerce_custom_procut_textarea));
}

// Print out delivery info field
function custom_field_delivery_info() {
  echo "<div class='delivery-info'><img src='/themes/lokalbonden/assets/images/svg/time.svg'><p>".get_post_meta(get_the_ID(), '_custom_product_text_field', true)."</p></div>";

}

// Print out product info field
function custom_field_product_info() {
  echo "<p class='product-info'>".get_post_meta(get_the_ID(), '_custom_product_textarea', true)."</p>";
}

add_action( 'woocommerce_after_shop_loop_item_title', 'custom_field_delivery_info', 5);

add_action( 'woocommerce_after_shop_loop_item', 'custom_field_product_info', 5);

// Remove all currency symbols
function sww_remove_wc_currency_symbols( $currency_symbol, $currency ) {
  $currency_symbol = '';
  return $currency_symbol;
}
add_filter('woocommerce_currency_symbol', 'sww_remove_wc_currency_symbols', 10, 2);

// Remove decimals from price
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

// Change output of "price-text"
function sv_change_product_price_display( $price ) {
  if (is_shop()) {

  global $product;
  $id = $product->get_id();
  if ($id === 44) {
    $price = 'Från '.$price.':- per kasse';
    return $price;

  } elseif ($id === 50) {
    $price = 'Testa-på pris '.$price.':-';
    return $price;
  }
}
}

add_filter( 'woocommerce_get_price_html', 'sv_change_product_price_display' );
add_filter( 'woocommerce_cart_item_price', 'sv_change_product_price_display' );
