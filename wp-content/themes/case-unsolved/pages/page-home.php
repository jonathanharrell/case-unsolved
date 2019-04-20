<?php
/**
 * Template Name: Home
 */

the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="home transition-fade" id="swup">
    <header class="home-header">
        <?php the_post_thumbnail(); ?>
        <div class="video-wrapper">
            <iframe src="https://player.vimeo.com/video/331327109?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="container transition-slide-up">
            <div class="home-header-text">
                <h1 class="home-title">Case Unsolved</h1>
                <?php
                $tagline = get_post_meta($post->ID, 'Tagline', true);
                if ($tagline) :
                    ?>
                    <p class="home-lead">
                        <?php echo $tagline; ?>
                    </p>
                    <?php endif; ?>
                <p><a href="https://vimeo.com/330129303/50d5308e3e" target="_blank" class="button">Watch the Teaser</a></p>
            </div>
        </div>
    </header>
    <?php
        query_posts([
            'post_type' => 'award',
            'orderby' => 'menu_order',
            'order' => 'ASC'
        ]);

        if(have_posts()) : ?>
            <section class="awards">
                <div class="container">
                    <h2 class="is-visually-hidden">Awards</h2>
                    <div class="awards-wrapper">
                        <?php while(have_posts()) : the_post(); ?>
                            <div class="award">
                                <?php
                                $place = get_post_meta($post->ID, 'Place', true);
                                if ($place) :
                                    ?>
                                    <p class="award-winner">
                                        <?php echo $place; ?>
                                    </p>
                                <?php endif; ?>
                                <h3 class="award-title">
                                    <?php the_title(); ?>
                                </h3>
                                <?php
                                $org = get_post_meta($post->ID, 'Organization', true);
                                if ($org) :
                                    ?>
                                    <p class="award-org">
                                        <?php echo $org; ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </section>
    <?php endif; ?>
    <div class="container">
        <?php the_content(); ?>
    </div>
    <?php get_template_part('partials/content', 'contact'); ?>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
