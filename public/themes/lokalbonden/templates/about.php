<?php
/*
Template Name: About
*/
get_header();
// Get custom fields from about page.
$fields = get_fields();
?>

<div class="about_wrapper">

  <div class="about_content">

    <div class="section1">
      <div class="section1_text">
        <h1 class="title"><?php echo $fields['title1']?></h1>
        <p class="paragraph"><?php echo $fields['paragraph1']?></p>
      </div>
      <div class="section1_image" style="background-image: url('<?php echo $fields['sectionOneImage'] ?>'">
        <p class="section1_image_text"><?php echo $fields['section1_image_text']?></p>
      </div>
    </div>

    <div class="section2">
      <h2 class="title"><?php echo $fields['title2']?></h2>
      <div class="section2_body">
        <div class="column_left">
          <p class="paragraph"><?php echo $fields['paragraph2']?></p>
        </div>
        <div class="column_right">
          <img class="image" src="<?php echo $fields['sectionTwoImage'] ?>">
        </div>
      </div>
    </div>

    <div class="section3">
      <h2 class="title"><?php echo $fields['title3']?></h2>
      <div class="section3_body">
        <div class="column_left">
          <img class="image" src="<?php echo $fields['sectionThreeImage'] ?>" alt="adsad">
        </div>
        <div class="column_right">
          <p class="paragraph"><?php echo $fields['paragraph3']?></p>
        </div>
      </div>
    </div>

    <div class="section4">
      <h2 class="title"><?php echo $fields['title4']?></h2>
      <div class="section4_body">
        <div id="map" style="height: 300px;"></div>
        <script>
        var map;
        function initMap() {
          var uluru = {lat: 57.718502, lng: 11.7668983};
          map = new google.maps.Map(document.getElementById('map'), {
            center: uluru,
            zoom: 11
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD73Ox64OJB9rghIA-GmGq0n8mzEEmll5Q&callback=initMap"
        async defer></script>

        <p class="paragraph"><?php echo $fields['paragraph2']?></p>
      </div>
    </div>
  </div>
</div>



<?php get_footer();?>
