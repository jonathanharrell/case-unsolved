<?php
/**
 * Template Name: Contact
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="contact-us">
    <img src="" alt="" class="contact-us-image">
    <div class="container">
        <section class="contact-info">
            <h1 class="contact-title">Contact Us</h1>
            <p>Write to <a href="mailto:cj@cjarellano.com">CJ@CJarellano.com</a> to learn more about ​Case Unsolved.</p>
            <p><a href="mailto:cj@cjarellano.com" class="button">Email us</a></p>
        </section>
    </div>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
