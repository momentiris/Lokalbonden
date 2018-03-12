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
      <h2 class="presentation_header_text"><?php echo $fields['presentation_header']; ?>


      <svg version="1.1" class="pres_svg" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
      	 width="100%" height="100%" viewBox="0 0 75 10" style="enable-background:new 0 0 75 10;" preserveAspectRatio="none">
      <path class="wobbly_path" style="stroke-miterlimit:10;" d="M0.938,5.066c0,0,8.08-6.447,16.6-0.932
      	c5.99,3.877,9.917,4.117,15.618-0.119c4.863-3.645,7.641,2.397,13.37,1.595c9.696-1.269,11.703-5.205,15.964-0.544
      	c3.428,4.117,10.969-2.563,10.969-2.563"/>
      </svg>
    </h2>
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
