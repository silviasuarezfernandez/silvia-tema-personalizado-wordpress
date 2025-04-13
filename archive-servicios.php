<?php get_header(); ?>

<main class="contenedor-archivo-servicios">
    <h1>Servicios</h1>
    <div class="grid-servicios">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="tarjeta-servicio">
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
                    $tiempo_de_realizacion = get_field('tiempo_de_realizacion'); 
                    ?>
                    <?php if ($precio) : ?>
                        <p><strong>Precio:</strong> $<?php echo esc_html($precio); ?></p>
                    <?php endif; ?>
                    <?php if ($tiempo_de_realizacion) : ?>
                        <p><strong>Tiempo de realización:</strong> <?php echo esc_html($tiempo_de_realizacion); ?> días</p>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p>No se han encontrado servicios.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>

