<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main id="main" class="section">
    <div class="container panel">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <h1>Page not found</h1>
            <p>We could not find the content you requested.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
