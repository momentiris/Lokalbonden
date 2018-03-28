<?php
/*
Template Name: Contact
*/

get_header();

$contactFields = get_fields();

?>

<div class="header" style="background-image:url('<?php echo $contactFields['page_title_background']; ?>'); background-color:tomato;">
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
    <!-- <form class="" action="index.html" method="post">
      <input class="button" type="text" name="" value="" placeholder="namn">
      <input class="button" type="text" name="" value="" placeholder="e-post">
      <textarea placeholder="Meddelande" class="button" name="name" rows="8" cols="80"></textarea>
      <button class="button" type="button" name="button">Skicka</button>
    </form> -->
    <?php echo do_shortcode("[wpforms id='228' title='false' description='false']"); ?>
  </div>

</section>
<?php get_footer();?>
