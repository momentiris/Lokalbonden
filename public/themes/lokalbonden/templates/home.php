<?php
/*
Template Name: Home
*/
get_header();
?>

<div class="hero_wrap">
<?php $homeTitle = get_posts(array('category_name' => 'HomeTitle'));

    // Loops the posts with our defined search parameters
    foreach ( $homeTitle as $post ) : setup_postdata( $post ); ?>

    <h1 class="home-title"><?php the_content(); ?></h1>                      <!-- Get post content -->

<?php endforeach;

    // Resets post searching parameters to default
    wp_reset_postdata();?>
</div>
<div class="home-bridge">
    <h2>En familjär matkasse</h2>
</div>
