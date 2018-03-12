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
    <div class="presentation_content_wrap">
      <h2 class="presentation_header_text"><?php echo $fields['presentation_header']; ?></h2>
      <div class="symbols_wrap">
        <div class="symbols symbol_3"></div>
        <div class="symbols symbol_2"></div>
        <div class="symbols symbol_1"></div>
        <div class="symbols symbol_4"></div>
      </div><!-- symbols_wrap -->
      <div class="presentation_content_text_wrap">
        <div class="text_inner_wrap">
            <h5>Enkelt</h5>
            <p> <?php echo $fields['presentation_content']; ?>  </p>
        </div><!-- text_inner_wrap -->
        <div class="text_inner_wrap">
            <h5>Gott</h5>
            <p> <?php echo $fields['presentation_content']; ?>  </p>
        </div><!-- text_inner_wrap -->
      </div> <!-- presentation_content_text_wrap -->
    <div class="presentation_button_wrap">
      <a href="#">Mer om oss!</a>
      <a href="#">Till butiken!</a>

    </div>

    </div><!-- presentation_content_wrap -->
</div> <!-- presentation_wrap -->



    <?php get_footer();?>
