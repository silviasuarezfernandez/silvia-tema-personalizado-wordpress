
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> 
    <?php wp_head(); ?> <!--  para cargar scripts y estilos -->
</head>
<body>

    <!-- logotipo -->
    <?php if (has_custom_logo()) : ?>
        <div class="logo">
            <?php the_custom_logo(); ?>
        </div>
    <?php else : ?>
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    <?php endif; ?>

    <!-- título  -->
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  <!-- menú -->
  <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'menu-principal',
    ));
    ?>

    <?php wp_footer(); ?> <!-- para cargar scripts y plugins  -->
</body>
</html>
