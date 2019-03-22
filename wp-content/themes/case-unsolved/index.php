<?php
the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<header>
    <h1>Blog</h1>
</header>
<section>
    <article>
        <time datetime="2001-05-15T19:00">11/11/2018</time>
        <h2>Case Unsolved Wins!</h2>
        <p>​The Case Unsolved team pitched our project at IFP Chicago and the Chicago International Film Festival's Pitch at Industry Days, a competition in which five narrative feature projects pitch to a live audience. A panel of judges awarded the winner with a prize package of production services valued at $20,000.  Check out our presentation in the video above to hear more details about our feature film and why we're making it. (Spoiler alert: we won!)</p>
    </article>
</section>

<?php get_template_part('partials/content', 'contact'); ?>
<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
