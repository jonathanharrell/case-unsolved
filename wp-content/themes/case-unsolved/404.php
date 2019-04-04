<?php
the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="error">
    <div class="container">
        <header class="error-header">
            <h1>Not found</h1>
            <p>Waahh sorry! No dice here.</p>
        </header>
    </div>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
