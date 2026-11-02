<?php get_header(); ?>

<main>
    <h1>Archive</h1>
    <?php while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>