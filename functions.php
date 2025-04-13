<?php
function silvia_tema_setup() {
    //  soporte para imágenes destacadas
    add_theme_support('post-thumbnails');

    // registrar menú de navegación
    register_nav_menus(array(
        'primary' => __('Menú Principal', 'silvia-tema'),
    ));

    //  opción de logotipo 
    add_theme_support('custom-logo');
}

//  para ejecutar la función al inicializar el tema
add_action('after_setup_theme', 'silvia_tema_setup');

// para crear custom post type: productos
function crear_cpt_productos() {
    $args = array(
        'label' => 'Productos',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'productos'),
        'show_in_rest' => true, // para usar con el editor de bloques
        'show_ui' => true,  
        'show_in_menu' => true, // para que se muestre solo una vez
        'menu_position' => 5, // para evitar conflictos con otros elementos del menú
    );
    register_post_type('producto', $args);
}
add_action('init', 'crear_cpt_productos');

// para crear custom post type: servicios
function crear_cpt_servicios() {
    $args = array(
        'label' => 'Servicios',
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'rewrite' => array('slug' => 'servicios'),
        'show_in_rest' => true, // para usar con el editor de bloques
        'show_ui' => true,
        'show_in_menu' => true, 
        'menu_position' => 6, // Cambia la posición del menú si es necesario
    );
    register_post_type('servicio', $args);
}
add_action('init', 'crear_cpt_servicios');

// para asociar categorías predeterminadas (si las necesitas) a CPT 'productos' y 'servicios'.
function agregar_taxonomias_a_cpt() {
    // para asociar categorías a 'productos'
    register_taxonomy_for_object_type('category', 'producto');
    // para asociar categorías a 'servicios'
    register_taxonomy_for_object_type('category', 'servicio');
}
add_action('init', 'agregar_taxonomias_a_cpt');
?>

