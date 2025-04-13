<?php get_header(); ?>

<main class="contenedor-servicio">
    <h1><?php the_title(); ?></h1>

    
    <?php if (has_post_thumbnail()) : ?>
        <div class="imagen-servicio">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    
    <div class="detalles-servicio">
        <p><strong>Descripción:</strong> <?php the_content(); ?></p>

        <?php
        
        $precio = get_field('precio'); 
        $tiempo = get_field('tiempo_de_realizacion'); 

        
        if ($precio): ?>
            <p><strong>Precio:</strong> $<?php echo esc_html($precio); ?></p>
        <?php endif; ?>

        
        <?php if ($tiempo): ?>
            <p><strong>Tiempo de realización:</strong> <?php echo esc_html($tiempo); ?></p>
        <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>
