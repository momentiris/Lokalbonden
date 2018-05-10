<?php
/*
Template Name: Home
*/
get_header();
$fields = get_fields();
$image_hero = $fields['background_image_1'];




?>
<div class="swiper__outer">
  <h1 class="home-title title" ><?php echo $fields['header_text'] ?></h1>

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide " style="background-image: url('<?php the_field('background_image_1'); ?>')">

    </div>
    <div class="swiper-slide " style="background-image: url('<?php the_field('background_image_2'); ?>')">
    </div>
    <div class="swiper-slide " style="background-image: url('<?php the_field('background_image_3'); ?>')">

    </div>

  </div>

</div>
</div>
<!-- <div class="hero_wrap" style="background-image: url('<?php echo $image_hero['sizes']['large'] ?>')">

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
      <a href="/om-oss" class="button small">Mer om oss!</a>
      <a href="/kassarna" class="button small">Till butiken!</a>

    </div><!-- presentation_button_wrap -->
  </div><!-- presentation_content_wrap -->
</div> <!-- presentation_wrap -->

<div class="bridge_wrap">
    <div class="bridge_content">

      <svg class="bridge_svg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375 20.13">
        <path fill="none" stroke-miterlimit="10" d="M0 19.565s22.292-21.5 43.273-14.5 26.226 16.598 66.221 6.549c39.995-10.049 64.91-8.549 85.235 2.451s60.976-21.303 93.759-10.401c32.782 10.901 49.829 17.401 83.924 2.901"/>
        </svg>
      <h1 class="bridge_text"><?php echo $fields['bridge_text']; ?></h1>
      <svg class="bridge_svg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 375 20.13">
        <path fill="none" d="M0 19.565s22.292-21.5 43.273-14.5 26.226 16.598 66.221 6.549c39.995-10.049 64.91-8.549 85.235 2.451s60.976-21.303 93.759-10.401c32.782 10.901 49.829 17.401 83.924 2.901"/>
      </svg>

  </div><!-- bridge_content -->
</div><!-- bridge_wrap -->

<div class="shop_section_wrap" style="background-image: url('<?php echo $fields['shop_section_background']; ?>')">
  <h1><?php echo $fields['shop_header']; ?></h1>
  <div class="product_inner">
    <div class="featured_product">
      <h1><?php echo $fields['product_1_name']; ?></h1>
      <p><?php echo $fields['product_1_description']; ?></p>
      <a href="#" class="button small">Beställ nu!</a>
    </div>
    <img class="shop_svg" src="/themes/lokalbonden/assets/images/svg/wobbly_kassarna.svg" alt="">
    <div class="featured_product">
      <h1><?php echo $fields['product_2_name']; ?></h1>
      <p><?php echo $fields['product_2_description']; ?></p>
      <a href="#" class="button small">Beställ nu!</a>
    </div>
  </div>

</div>

<div class="info_section_wrap">
  <div class="howto_content">
    <h1><?php echo $fields['how_header']; ?></h1>
      <p>- <?php echo $fields['how_step_1']; ?></p>
      <p>- <?php echo $fields['how_step_2']; ?></p>
      <p>- <?php echo $fields['how_step_3']; ?></p>

      <a href="#" class="button small">Till kassarna!</a>
  </div>


</div>



    <?php get_footer();?>
