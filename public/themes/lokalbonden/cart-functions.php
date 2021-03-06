<?php

/*
 * This file is part of Lokalbonden.
 *
 * MIT License, Lokalbonden special squad.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// function checkout_slider()
// {
//     wp_nav_menu([
//     'theme_location' => 'checkout-menu',
//     'container_class' => 'checkout-menu-container',
//     'fallback_cb' => false,
//   ]);
// };
// add_action('woocommerce_before_cart', 'checkout_slider');
// add_action('woocommerce_before_order', 'checkout_slider');
// add_action('woocommerce_checkout_before_customer_details', 'checkout_slider');

function get_cart_addons()
{
    $args = [
    'posts_per_page' => -1,
    'post_type'      => 'product',
    'post_status'    => 'publish',
    'tax_query'      => [
        [
            'taxonomy'  => 'product_cat',
            'field'     => 'term_id',
            'terms'     => array('20'),
            'operator'  => 'IN',
        ]
   ]
  ];
    $addon_products = new WP_Query($args);

    require_once __DIR__.'/woocommerce/cart/content-addons.php';
}

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_action('woocommerce_after_cart_table', 'get_cart_addons');
