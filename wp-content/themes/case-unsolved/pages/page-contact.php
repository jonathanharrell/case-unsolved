<?php
/**
 * Template Name: Contact
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<section>
    <h1>Contact Us</h1>
    <p>Write to <a href="">CJ@CJarellano.com</a> to learn more about ​Case Unsolved.</p>
    <p><a href="">Email us</a></p>
</section>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
