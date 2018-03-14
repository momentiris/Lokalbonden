<?php

/*
 * This file is part of Lokalbonden.
 *
 * MIT License, Lokalbonden special squad.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function checkout_slider()
{
    wp_nav_menu([
    'theme_location' => 'checkout-menu',
    'container_class' => 'checkout-menu-container',
    'fallback_cb' => false,
  ]);
};

add_action('woocommerce_before_cart', 'checkout_slider');
