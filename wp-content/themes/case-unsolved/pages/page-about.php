<?php
/**
 * Template Name: About
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="about">
    <header class="about-header">
        <?php the_post_thumbnail(); ?>
        <h1 class="is-visually-hidden">About</h1>
    </header>
    <div class="container">
        <section class="writer-director-statement">
            <div class="writer-director-statement-wrapper">
                <header class="writer-director-statement-header">
                    <h2>Writer/&shy;Director's Statement</h2>
                </header>
                <?php the_content(); ?>
                <p class="writer-director">C.J. Arellano</p>
            </div>
        </section>
        <?php
        query_posts([
            'post_type' => 'team_member',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ]);

        if(have_posts()) : ?>
            <section class="team">
                <header class="team-header">
                    <h2>The Team</h2>
                </header>
                <?php while(have_posts()) : the_post(); ?>
                    <div class="team-member">
                        <figure class="team-member-image">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="team-member-text">
                            <h3 class="team-member-name">
                                <?php the_title(); ?>
                            </h3>
                            <?php
                            $title = get_post_meta($post->ID, 'Title', true);
                            if ($title) :
                                ?>
                                <p class="team-member-title">
                                    <?php echo $title; ?>
                                </p>
                            <?php endif; ?>
                            <div class="team-member-bio">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </section>
        <?php endif; ?>
    </div>
    <?php get_template_part('partials/content', 'contact'); ?>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
