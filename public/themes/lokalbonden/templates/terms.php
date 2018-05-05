<?php
/*
Template Name: Terms
*/

get_header();

$termsFields = get_fields();

?>

<div class="terms">
    <header class="subpageTitle termsHeader">
      <h1 class="title"><?php echo $termsFields['header']?></h1>
    </header>


<div class="terms-section">
  <div class="text-content-terms">
    <?php echo $termsFields['anvandarvillkor']?>
  </div>
</div>


</div>

<?php get_footer();?>
