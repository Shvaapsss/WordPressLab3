<?php get_header(); ?>

<main class="content">
    <h2>Последние записи</h2>

    <?php
    $recent_posts = new WP_Query(array(
        'posts_per_page' => 5
    ));

    if ($recent_posts->have_posts()) :
        while ($recent_posts->have_posts()) : $recent_posts->the_post();
    ?>
        <article class="post">
            <h2>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p><strong>Автор:</strong> <?php the_author(); ?> |
               <strong>Дата:</strong> <?php the_date(); ?></p>
            <div>
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Записей пока нет.</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>