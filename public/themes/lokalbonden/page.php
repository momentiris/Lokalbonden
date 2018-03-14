<?php get_header(); ?>


<main role="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <header class="subpageTitle">
                <h1 class="title"><?php the_title(); ?></h1>
            </header>
            <?php the_content(); ?>
        </article>
    <?php endwhile; else: ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>
</main>
<?php get_footer();?>
