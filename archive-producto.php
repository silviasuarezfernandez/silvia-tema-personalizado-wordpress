<?php get_header(); ?>

<main class="contenedor-archivo-productos">
    <h1>Productos</h1>
    <div class="grid-productos">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="tarjeta-producto">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="imagen"><?php the_post_thumbnail('medium'); ?></div>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                </a>
                <div class="extracto"><?php the_excerpt(); ?></div>

                <div class="campos-personalizados">
                    <?php 
                    
                    $precio = get_field('precio');
                    $stock = get_field('stock');
                    ?>
                    <?php if ($precio) : ?>
                        <p><strong>Precio:</strong> $<?php echo esc_html($precio); ?></p>
                    <?php endif; ?>
                    <?php if ($stock) : ?>
                        <p><strong>Stock:</strong> <?php echo esc_html($stock); ?></p>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p>No se han encontrado productos.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>


