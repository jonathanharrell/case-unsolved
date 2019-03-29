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
        <img src="" alt="" class="home-header-image">
        <div class="container">
            <h1 class="home-title">Case Unsolved</h1>
            <p class="home-lead">A horror feature about a gay couple who accidentally summon a ghost from an old 1980s TV show.</p>
            <p><a href="" class="button">Watch the Pitch</a></p>
        </div>
    </header>
    <section class="awards">
        <div class="container">
            <h2 class="is-visually-hidden">Awards</h2>
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
    </section>
    <section class="quote">
        <div class="container">
            <blockquote>
                <p>CASE UNSOLVED is a clever and inventive script that contains scenes of action and suspense, high drama and other dramatic excitement.</p>
                <cite>Screencraft</cite>
            </blockquote>
        </div>
    </section>
    <section class="summary">
        <div class="container">
            <h2 class="is-visually-hidden">Summary</h2>
            <figure>
                <img src="" alt="">
            </figure>
            <div>
                <p>
                    <strong>RIZ</strong> and his husband <strong>OWEN</strong> reminisce one night about Case Unsolved, a creepy 1980s TV show they remember having watched as kids. It was a docu-series about ghosts, aliens, and other paranormal activity.
                </p>
                <p>
                    ​Riz even remembers the show's tip hotline number, and as a joke, they decide to call it. That's when they learn the <strong>dark side of nostalgia</strong>.
                </p>
            </div>
            <figure>
                <img src="" alt="">
            </figure>
            <p>
                Their call has summoned a <strong>murderous ghost</strong> who was once featured on an episode of the show. And when the evil spirit appears to kill people around Riz and Owen, they have to work together to play amateur ghost detective and bring her soul to rest.
            </p>
            <p>
                As Riz and Owen unravel the mystery before the ghost claims their lives, too, they realize that <strong>there's no going back to how things used to be</strong>.
            </p>
        </div>
    </section>
    <section class="quote">
        <div class="container">
            <blockquote>
                <p>Captivating… Compelling… Eerie, with loads of charm.</p>
                <cite>Horror Film & Screenplay Festival</cite>
            </blockquote>
        </div>
    </section>
    <?php get_template_part('partials/content', 'contact'); ?>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
