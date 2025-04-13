
<?php get_header(); ?>

<main class="categoria-noticias">
    <h1>Noticias Recientes</h1>
    <div class="entradas-noticias">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="entrada-noticia">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="imagen-noticia">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="meta-info">
                    <p><strong>Publicado el:</strong> <?php the_date(); ?> | <strong>Por:</strong> <?php the_author(); ?></p>
                </div>

                <div class="extracto-noticia">
                    <?php the_excerpt(); ?>
                </div>

                <a href="<?php the_permalink(); ?>" class="leer-mas">Leer más</a>
            </article>
        <?php endwhile; else : ?>
            <p>No hay noticias disponibles en esta categoría.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
