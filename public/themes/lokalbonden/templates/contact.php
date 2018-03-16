<?php
/*
Template Name: Contact
*/

get_header();

// Define what posts we are looking for
$contactPosts = get_posts(array('category_name' => 'Contact'));

// Loops the posts with our defined search parameters
foreach ($contactPosts as $post) : setup_postdata($post); ?>

<h2><?php the_title();?></h2> <!-- Get post title -->
<p><?php the_content(); ?></p> <!-- Get post content -->

<?php if (has_category('Adress', $post)): ?> <!-- Checks if post is certain  category -->
  <p>Post with the specified category</p>
<?php endif; ?>

<?php endforeach;

// Resets post searching parameters to default
wp_reset_postdata();?>
