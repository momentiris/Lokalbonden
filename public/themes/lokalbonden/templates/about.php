<?php
/*
Template Name: About
*/
<<<<<<< HEAD
// Get posts from category.
$aboutPosts = get_posts(array('category_name' => 'about'));
=======

// var_dump(get_posts('category'=>16));
// var_dump(get_categories());
// $aboutPosts = get_posts(array('category_name' => 'about'));
// var_dump($aboutPosts[1]->post_title ;
// foreach ( $contactPosts as $post ) : setup_postdata( $post );
//



//
// <?php endforeach;
// wp_reset_postdata();
>>>>>>> 3cd257da23f1d4eaaf209198f5b11068848c80ca




?>
<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<<<<<<< HEAD

            <h2 class="name"><?php echo $aboutPosts[0]->post_title; ?></h2>
=======
            <h1 class="test">TEST</h1>

>>>>>>> 3cd257da23f1d4eaaf209198f5b11068848c80ca

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();?>
