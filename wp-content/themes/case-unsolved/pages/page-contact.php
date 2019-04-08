<?php
/**
 * Template Name: Contact
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="contact-us transition-fade" id="swup">
    <?php the_post_thumbnail(); ?>
    <div class="container transition-slide-up">
        <section class="contact-info">
            <h1 class="contact-title">
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
            <p><a href="mailto:connect@caseunsolved.com" class="button">Email us</a></p>
        </section>
    </div>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
