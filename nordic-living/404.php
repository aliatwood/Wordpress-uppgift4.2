<?php get_header(); ?>

<main class="error-page">
    <h1>Sidan kunde inte hittas</h1>
    <p>Tyvärr finns inte sidan du söker.</p>
    <a href="<?php echo esc_url(home_url('/')); ?>">Till startsidan</a>
</main>

<?php get_footer(); ?>