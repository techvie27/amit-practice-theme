<?php get_header(); ?>

<main>
    <?php while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php $price = get_field( 'service_price' );

if ( $price ) {
    echo '<p>Price: ' . esc_html( $price ) . '</p>';
}
?>
    <?php endwhile; ?>
    <p>SERVICE TEMPLATE</p
</main>

<?php get_footer(); ?>