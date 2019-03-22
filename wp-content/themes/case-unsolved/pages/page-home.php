<?php
/**
 * Template Name: Home
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<header>
    <h1>Case Unsolved</h1>
    <p>A horror feature about a gay couple who accidentally summon a ghost from an old 1980s TV show.</p>
    <p><a href="">Watch the Pitch</a></p>
</header>
<section>
    <h2>Awards</h2>
    <div>
        <p>Winner</p>
        <h3>The Pitch at Industry Days</h3>
        <p>IPF Chicago & Chicago Intl. Film Festival</p>
    </div>
    <div>
        <p>Winner</p>
        <h3>Fast Track Fellowship</h3>
        <p>International Screenwriter's Assocation</p>
    </div>
</section>
<section>
    <blockquote>
        <p>CASE UNSOLVED is a clever and inventive script that contains scenes of action and suspense, high drama and other dramatic excitement.</p>
        <cite>Screencraft</cite>
    </blockquote>
</section>
<section>
    <h2>Summary</h2>
    <figure>
        <img src="" alt="">
    </figure>
    <div>
        <p>
            RIZ and his husband OWEN reminisce one night about Case Unsolved, a creepy 1980s TV show they remember having watched as kids. It was a docu-series about ghosts, aliens, and other paranormal activity.
        </p>
        <p>
            ​Riz even remembers the show's tip hotline number, and as a joke, they decide to call it. That's when they learn the dark side of nostalgia.
        </p>
    </div>
    <figure>
        <img src="" alt="">
    </figure>
    <p>
        Their call has summoned a murderous ghost who was once featured on an episode of the show. And when the evil spirit appears to kill people around Riz and Owen, they have to work together to play amateur ghost detective and bring her soul to rest.
    </p>
    <p>
        As Riz and Owen unravel the mystery before the ghost claims their lives, too, they realize that there's no going back to how things used to be.
    </p>
</section>
<section>
    <blockquote>
        <p>Captivating… Compelling… Eerie, with loads of charm.</p>
        <cite>Horror Film & Screenplay Festival</cite>
    </blockquote>
</section>

<?php get_template_part('partials/content', 'contact'); ?>
<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
