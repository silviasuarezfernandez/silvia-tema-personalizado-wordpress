<?php get_header(); ?>

<main class="categoria-general">
    <h1><?php single_cat_title(); ?></h1>

    <?php 
    
    if ( category_description() ) {
        echo '<div class="descripcion-categoria">' . category_description() . '</div>';
    }
    ?>

    <div class="entradas-categoria">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="entrada-categoria">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="imagen-entrada">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
                
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="meta-info">
                    <p><strong>Publicado el:</strong> <?php the_date(); ?> | <strong>Por:</strong> <?php the_author(); ?></p>
                </div>
                
                <div class="extracto-entrada">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p>No se han encontrado entradas en esta categoría.</p>
        <?php endif; ?>
    </div>

    
    <div class="paginacion">
        <?php
        echo paginate_links();
        ?>
    </div>
</main>

<?php get_footer(); ?>

