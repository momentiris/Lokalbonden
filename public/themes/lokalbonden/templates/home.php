<?php
/*
Template Name: Home
*/
get_header();
$fields = get_fields();
$image_hero = $fields['background_image_1'];
?>
<div class="hero_wrap" style="background-image: url('<?php echo $image_hero['sizes']['large'] ?>')">

    <h1 class="home-title" ><?php echo $fields['header_text'] ?></h1>
</div> <!--Hero wrapper -->

<div class="presentation_wrap" style="background-image: url('<?php echo $fields['presentation_image']['sizes']['large']; ?>')">

</div> <!-- Presentation wrapper -->



    <?php get_footer();?>
