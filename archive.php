<?php get_header(); ?>

<main class="content">
    <h1><?php the_archive_title(); ?></h1>
    <p><?php the_archive_description(); ?></p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p><strong>Дата:</strong> <?php the_date(); ?></p>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; else : ?>
        <p>Архив пуст.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>