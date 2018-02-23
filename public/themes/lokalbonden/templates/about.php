<?php
/*
Template Name: About
*/
<<<<<<< HEAD
=======

// Get posts from category.
$aboutPosts = get_posts(array('category_name' => 'about'));
>>>>>>> 340abc2a49235e09c7ff7944e5e12a3cad31cfbd

// var_dump(get_posts('category'=>16));
// var_dump(get_categories());
// $aboutPosts = get_posts(array('category_name' => 'about'));
// var_dump($aboutPosts[1]->post_title ;
// foreach ( $contactPosts as $post ) : setup_postdata( $post );
//



//
// <?php endforeach;
// wp_reset_postdata();
<<<<<<< HEAD
=======

>>>>>>> 340abc2a49235e09c7ff7944e5e12a3cad31cfbd




?>
<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<<<<<<< HEAD
            <h1 class="test">TEST</h1>

=======


            <h2 class="name"><?php echo $aboutPosts[0]->post_title; ?></h2>

            <h1 class="test">TEST</h1>


>>>>>>> 340abc2a49235e09c7ff7944e5e12a3cad31cfbd

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();?>
