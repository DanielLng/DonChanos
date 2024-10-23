<?php

function donchanos_styles()
{
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style( 'flexslider_css', get_template_directory_uri() . '/assets/flexslider/flexslider.css', array(), null, 'all' );
}
add_action('wp_enqueue_scripts', 'donchanos_styles');


function enqueue_scripts()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('flexslider_js', get_template_directory_uri() . '/assets/flexslider/jquery.flexslider-min.js', array('jquery'), null, true);
    wp_enqueue_script('flexslider_js-2', get_template_directory_uri() . '/assets/js/flexslider.js', array('jquery'), null, true);
    wp_enqueue_script( 'mapa', get_template_directory_uri() . '/assets/js/map.js', array(), null, 'all' );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array(), null, 'all' );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Configuración general',
        'menu_title'    => 'Configuración general',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

// Permitir subida de SVG
function permitir_subida_svg($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'permitir_subida_svg');

// Evitar problemas de seguridad
function revisar_tipo_de_archivo($data, $file, $filename, $mimes) {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if ($ext === 'svg') {
        $data['ext'] = 'svg';
        $data['type'] = 'image/svg+xml';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'revisar_tipo_de_archivo', 10, 4);

// Registrar una taxonomía personalizada para tu CPT
function registrar_taxonomia_categorias_personalizadas() {
    register_taxonomy(
        'categoria', // El slug de la taxonomía
        'platillo', // Tu CPT
        array(
            'labels' => array(
                'name' => 'Categorías',
                'singular_name' => 'Categoría',
            ),
            'hierarchical' => true, // Permite tener subcategorías
            'show_ui' => true,
            'show_in_menu' => true,
        )
    );
}
add_action('init', 'registrar_taxonomia_categorias_personalizadas');
