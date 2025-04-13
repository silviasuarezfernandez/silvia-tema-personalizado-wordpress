
<?php get_header(); ?>

<main class="contenedor-producto">
    <h1><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()) : ?>
        <div class="imagen-producto">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="detalles-producto">
        <p><strong>Descripción:</strong> <?php the_content(); ?></p>

        <?php
         $precio = get_field('precio'); 
        $stock = get_field('stock'); 

        if ($precio): ?>
            <p><strong>Precio:</strong> $<?php echo esc_html($precio); ?></p>
        <?php endif; ?>

        <?php if ($stock): ?>
            <p><strong>Stock:</strong> <?php echo esc_html($stock); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
