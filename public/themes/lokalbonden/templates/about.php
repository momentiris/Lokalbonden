<?php
/*
Template Name: About
*/

// Get custom fields from about page.
$aboutFields = get_field('about');

?>
<?php get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

            <h2 class="name"></h2>

            <h1 class="test"><?php echo $aboutFields ?></h1>

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php get_footer();?>
