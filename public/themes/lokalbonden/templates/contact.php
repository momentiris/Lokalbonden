<?php
/*
Template Name: Contact
*/

get_header();

$contactFields = get_fields();

?>

<div class="header contact-header" style="background-image:url('<?php echo $contactFields['page_title_background']; ?>');">
  <div class="header_text">
    <h1 class="title"><?php echo $contactFields['page_title'] ?></h1>
  </div>
</div>

<div class="section1">
  <p><?php echo $contactFields['section1_paragraph'] ?></p>
</div>

<section class="section2">
  <div class="column-left">
    <p><?php echo $contactFields['phone']; ?></p>
    <p><?php echo $contactFields['email']; ?></p>
  </div>

  <div class="column-center">
    <img class="wobbly-kassarna" src="/themes/lokalbonden/assets/images/svg/wobbly_kassarna.svg">
  </div>

  <div class="column-right">
    <?php echo do_shortcode( '[contact-form-7 id="234" title="Kontakta oss"]' ); ?>
  </div>

</section>
<?php get_footer();?>
