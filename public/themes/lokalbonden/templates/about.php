<?php
/*
Template Name: About
*/
// Get posts from category.
$aboutPosts = get_posts(array('category_name' => 'about'));




?>
<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

            <h2 class="name"><?php echo $aboutPosts[0]->post_title; ?></h2>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();?>
