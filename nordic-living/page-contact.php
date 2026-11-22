<?php
/*
Template Name: Kontakt
*/

get_header();
?>

<main class="contact-page">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>