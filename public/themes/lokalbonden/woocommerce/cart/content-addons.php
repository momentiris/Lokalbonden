<?php
/**
 * Addons
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cross-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if (! defined('ABSPATH')) {
    exit;
}

if ($addon_products):

if ($addon_products->have_posts()) : ?>

    <?php while ($addon_products->have_posts()):
        $post = get_post($addon_products->the_post());
        $product = wc_get_product($post->ID);
        // die(var_dump($product));
        // wc_get_template_part('content', 'product');?>

          <input type="checkbox" name="check[<?php echo $product->get_id(); ?>]" id="check-<?php echo $product->get_id(); ?>" >
          <label for="check[<?php echo $product->get_id(); ?>]"><?php echo $product->get_name().' '.$product->get_price().' kr' ?></label>

    <?php endwhile; ?>
  <?php endif; ?>
<?php endif; ?>
