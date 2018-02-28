<?php
/*
Template Name: Home
*/
get_header();
$fields = get_fields();
$image = $fields['background_image_1'];
$image_2 = $fields['background_image_2'];
$image_3 = $fields['background_image_3'];
$image_1_url = $image['sizes']['large'];
$image_2_url = $image_2['sizes']['large'];
$image_3_url = $image_3['sizes']['large'];

$bgUrl = [
  '0' => "$image_1_url",
  '1' => "$image_2_url",
  '2' => "$image_3_url"
];

$jsoned = json_encode($bgUrl, JSON_UNESCAPED_SLASHES);

//write json to file
file_put_contents("themes/lokalbonden/url.json", $jsoned);

?>


<div class="hero_wrap">

    <h1 class="home-title" style="background-image: url('<?php echo $image_1_url ?>')"><?php echo $fields['header_text'] ?></h1>

    <?php get_footer(); ?>
