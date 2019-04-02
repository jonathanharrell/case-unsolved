<?php
the_post();
get_header();
?>

<?php get_template_part('partials/content', 'site-header'); ?>

<main class="blog">
    <header class="blog-header is-visually-hidden">
        <h1>Blog</h1>
    </header>
    <?php
        query_posts([
            'post_type' => 'post',
            'order' => 'DESC'
        ]);

        if(have_posts()) : ?>
            <section class="blog-posts">
                <?php while(have_posts()) : the_post(); ?>
                    <article class="blog-post">
                        <div class="container">
                            <div class="blog-post-wrapper">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="blog-post-date">
                                    <?php echo get_the_date('m/d/Y'); ?>
                                </time>
                                <h2 class="blog-post-title"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </section>
        <?php endif; ?>
    <?php get_template_part('partials/content', 'contact'); ?>
</main>

<?php get_template_part('partials/content', 'site-footer'); ?>

<?php get_footer();
