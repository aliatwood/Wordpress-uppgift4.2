<?php
/*
Template Name: Om oss
*/

get_header();
?>

<main class="about-page">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>