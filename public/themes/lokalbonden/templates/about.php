<?php
/*
Template Name: About
*/
get_header();

$aboutFields = get_fields();
?>


<div class="about_page">
  <div class="header" style="background-image:url('<?php echo $aboutFields['page_title_background']; ?>')">
    <div class="header_text">
      <h1 class="title"><?php echo $aboutFields['page_title'] ?></h1>
      <p class="title"><?php echo $aboutFields['page_title_subtitle'] ?></p>
    </div>
  </div>
  <div class="sections">
    <div class="first_section">
      <div class="left_column">
        <h2><?php echo $aboutFields['section1_title'] ?></h2>
        <p><?php echo $aboutFields['section1_paragraph'] ?></p>
      </div>
      <div class="right_column">
        <img src="<?php echo $aboutFields['section1_image'] ?>" alt="">
      </div>
    </div>

    <div class="second_section">
      <div class="left_column">
        <img src="<?php echo $aboutFields['section1_image'] ?>" alt="">
      </div>
      <div class="right_column">
        <h2><?php echo $aboutFields['section1_title'] ?></h2>
        <p><?php echo $aboutFields['section1_paragraph'] ?></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>
