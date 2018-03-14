<?php

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
