<?php get_header(); ?>

<main class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <h1><?php the_title(); ?></h1>
            <div>
                <?php the_content(); ?>
            </div>
        </article>

        <?php comments_template(); ?>

    <?php endwhile; else : ?>
        <p>Страница не найдена.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>