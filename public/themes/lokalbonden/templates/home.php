<?php
/*
Template Name: Home
*/
get_header();
<<<<<<< HEAD
?>

<div class="hero_wrap">
<?php
// $homeTitle = get_posts(array('category_name' => 'HomeTitle'));
// $ingress = get_field('ingress');
$image = get_field('bakgrundsbild');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
=======
>>>>>>> b7cff20d4b1863e2690d3b1f803c40c65d0d9eef

$fields = get_fields();
$image = $fields['background_image_1'];

?>

<div class="hero_wrap" style="background-image: url('<?php echo $image['sizes']['large'] ?>'">

    <h1 class="home-title"><?php echo $fields['header_text'] ?></h1>
