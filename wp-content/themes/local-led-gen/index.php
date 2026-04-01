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
                <article <?php post_class(); ?>>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h1>Welcome</h1>
            <p>No content found yet. Create your Home, Services, and Contact pages in WordPress admin.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
