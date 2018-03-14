<?php get_header(); ?>



    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <header class="subpageTitle">
                <h1 class="title"><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
    <?php endwhile; else: ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>

<?php get_footer();?>
