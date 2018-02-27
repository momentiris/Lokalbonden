<?php
/*
Template Name: Home
*/
get_header();
?>

<div class="hero_wrap">
<?php
// $homeTitle = get_posts(array('category_name' => 'HomeTitle'));
// $ingress = get_field('ingress');
$image = get_field('bakgrundsbild');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $image ) {

	echo wp_get_attachment_image( $image, $size );

}
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
var_dump($image['url']);

    // Loops the posts with our defined search parameters
    // foreach ( $ingress as $items ) : setup_postdata( $items ); ?>

    <!-- <h1 class="home-title"><?php //echo $ingress ?></h1> -->
              <!-- Get post content -->
<!-- <?php //endforeach; -->

    // Resets post searching parameters to default
    // wp_reset_postdata();?>
</div>
<div class="home-bridge">
    <h2>En familjär matkasse</h2>
</div>
