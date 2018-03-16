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
        <div class="svg_wrap">
          <?php echo file_get_contents(__DIR__."/../media/beetroot.svg") ?>
        </div>

      </div>
    </div>
    <div class="section_border_wrapper">
      <div class="section_border">
        <?php echo file_get_contents(__DIR__."/../media/wobbly_line.svg") ?>
      </div>
    </div>
    <div class="second_section">
      <div class="left_column">
        <div class="svg_wrap">
          <?php echo file_get_contents(__DIR__."/../media/green-cabbage.svg") ?>
        </div>

      </div>
      <div class="right_column">
        <h2><?php echo $aboutFields['section2_title'] ?></h2>
        <p><?php echo $aboutFields['section2_paragraph'] ?></p>
      </div>
    </div>

    <div class="third_section">
      <div class="button_wrap">
        <button class="btn-find-us btn-green btn-border-o">Hitta oss</button>
      </div>
    </div>

  </div>
</div>

<?php get_footer();?>
