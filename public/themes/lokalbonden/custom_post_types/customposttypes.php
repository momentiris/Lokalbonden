<?php
/**
 * Array of custom post types.
 *
 * ['plural name', 'singular name']
 *
 * @var array
 */
$customPostTypes = [
    ['Clients', 'Client'],
    ['Orders', 'Order'],
    ['Products', 'Product'],
];

/**
 * Loop through array of CPTs and trigger create_post_type in functions.php.
 *
 * @var [string]
 */
foreach ($customPostTypes as $type) {
    do_action('CPT', $type[0], $type[1] );
}
