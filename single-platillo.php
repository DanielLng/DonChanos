<?php
/*
Displays single posts
*/
?>
<?php get_header() ?>
<?php
// Argumentos de la consulta para tu Custom Post Type
$args = array(
    'post_type' => 'platillo', // Reemplaza con tu CPT
    'posts_per_page' => -1, // Número de posts a obtener, -1 es para obtener todos
);

// La consulta personalizada
$query = new WP_Query($args);

// El loop
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        // Obtener el ID del post actual
        $post_id = get_the_ID();

        // Obtener los valores de los campos de ACF
        $titulo_personalizado = get_field('horario', $post_id); // Campo de texto
        $descripcion_personalizada = get_field('descripcion', $post_id); // Campo de área de texto

        // Mostrar el título del post (nativo de WordPress)
        the_title('<h1>', '</h1>');

        // Mostrar el campo de texto personalizado
        if ($titulo_personalizado) {
            echo '<h2>' . esc_html($titulo_personalizado) . '</h2>';
        }

        // Mostrar el área de texto personalizada
        if ($descripcion_personalizada) {
            echo '<p>' . esc_html($descripcion_personalizada) . '</p>';
        }

    endwhile;
    wp_reset_postdata();
else :
    echo 'No se encontraron posts.';
endif;
?>

<?php get_footer(); //can call get_footer( 'posts' ) ?>	