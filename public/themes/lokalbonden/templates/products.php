<?php
/*
Template Name: Products
*/
get_header();

$productFields = get_fields();
?>

<div class="header" style="background-image:url('<?php echo $productFields['page_title_background']; ?>')">
  <div class="header_text">
    <h1 class="title"><?php echo $productFields['page_title'] ?></h1>
    <p class="title"><?php echo $productFields['page_title_subtitle'] ?></p>
  </div>
</div>

  <div class="sections">

    <div class="first_section_bags">
      <div class="left_column_bags_first">
        <h2><?php echo $productFields['section1_title'] ?></h2>
        <img src="/themes/lokalbonden/media/harvest.svg" alt="">
        <p><?php echo $productFields['section1_paragraph'] ?></p>
        <br>
        <p><?php echo $productFields['section1_paragraph_2'] ?></p>
      </div>
      <div class="right_column_bags_first">
          <img src="/themes/lokalbonden/media/harvest.svg" alt="">
      </div>
    </div>

    <div class="section_border_bags">
      <?php echo file_get_contents(__DIR__."/../media/wobbly_line.svg") ?>
    </div>
    <div class="second_section_bags">

      <div class="left_column_bags_second">
        <img src="/themes/lokalbonden/media/planting.svg" alt="">
      </div>
      <div class="right_column_bags_second">
        <h2><?php echo $productFields['section2_title'] ?></h2>
        <img src="/themes/lokalbonden/media/planting.svg" alt="">
        <p><?php echo $productFields['section2_paragraph'] ?></p>
      </div>
    </div>

  </div>
</div>

<?php get_footer();?>
