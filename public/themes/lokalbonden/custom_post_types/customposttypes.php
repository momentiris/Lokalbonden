<?php

/*
 * This file is part of Lokalbonden.
 *
 * MIT License, Lokalbonden special squad.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
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
    do_action('CPT', $type[0], $type[1]);
}
