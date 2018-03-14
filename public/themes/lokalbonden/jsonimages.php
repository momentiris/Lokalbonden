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
// for some reason gives access to wordpress functions. ??? :)
 require('../../wordpress/wp-blog-header.php');

 /**
  *  Collects URLs from images uploaded as background images in the home custom fields,
  * echoes the urls as json which later gets fetched in backgroundswap.js
  *
  * @return [void] - Echoes json urls to background images.
  *
  */
 $fields = get_fields();
 $image_0 = $fields['background_image_1'];
 $image_1 = $fields['background_image_2'];
 $image_2 = $fields['background_image_3'];
 $image_0_url = $image_0['sizes']['large'];
 $image_1_url = $image_1['sizes']['large'];
 $image_2_url = $image_2['sizes']['large'];

 $imgUrls = [
   '0' => "$image_0_url",
   '1' => "$image_1_url",
   '2' => "$image_2_url"
 ];
 foreach ($imgUrls as $imgUrl => $value) {
     if ($value == '') {
         unset($imgUrls[$imgUrl]);
     }
 }

 $jsonified = json_encode($imgUrls, JSON_UNESCAPED_SLASHES);

 //write json to file
 echo $jsonified;
