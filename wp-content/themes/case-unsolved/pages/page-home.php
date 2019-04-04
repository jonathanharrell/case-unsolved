<?php
/**
 * Template Name: Home
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="home">
    <header class="home-header">
        <?php the_post_thumbnail(); ?>
        <img src="" alt="" class="home-header-image">
        <div class="container">
            <div class="home-header-text">
                <h1 class="home-title">Case Unsolved</h1>
                <p class="home-lead">A horror feature about a gay couple who accidentally summon a ghost from an old 1980s TV show.</p>
                <p><a href="https://vimeo.com/300204588" target="_blank" class="button">Watch the Pitch</a></p>
            </div>
        </div>
    </header>
    <section class="awards">
        <div class="container">
            <h2 class="is-visually-hidden">Awards</h2>
            <div class="awards-wrapper">
                <div class="award">
                    <p class="award-winner">Winner</p>
                    <h3 class="award-title">The Pitch at Industry Days</h3>
                    <p class="award-org">IPF Chicago & Chicago Intl. Film Festival</p>
                </div>
                <div class="award">
                    <p class="award-winner">Winner</p>
                    <h3 class="award-title">Fast Track Fellowship</h3>
                    <p class="award-org">International Screenwriter's Assocation</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <?php the_content(); ?>
    </div>
    <?php get_template_part('partials/content', 'contact'); ?>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
