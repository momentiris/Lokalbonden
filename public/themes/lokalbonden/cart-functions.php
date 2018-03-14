<?php

function checkout_slider() {
  wp_nav_menu([
    'theme_location' => 'checkout-menu',
    'container_class' => 'checkout-menu-container',
    'fallback_cb' => false,
  ]);
};

add_action('woocommerce_before_cart', 'checkout_slider');
