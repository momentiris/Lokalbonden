<?php
/*
Template Name: Home
*/
get_header();
$fields = get_fields();
$image = $fields['background_image_1'];
?>

<div class="hero_wrap" style="background-image: url('<?php echo $image['sizes']['large'] ?>'">

  <h1 class="home-title"><?php echo $fields['header_text'] ?></h1>
