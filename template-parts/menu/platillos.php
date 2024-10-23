<?php

// Obtener subcategorias de la categoría actual
$subcategorias = get_terms(array(
    'taxonomy' => 'categoria',
    'parent' => get_queried_object()->term_id,
    'hide_empty' => true,
));

if ($subcategorias) {
    foreach ($subcategorias as $subcategoria) {
        echo '<div class="m-title m-title-type-2 m-title--blue" id="' . esc_html($subcategoria->name) . '" >';
            echo '<img class="m-saucer__title-dec" src=" ' . get_template_directory_uri() . '/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">';
            echo '<img src=" ' . get_template_directory_uri() . '/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">';
            echo '<h2>' . esc_html($subcategoria->name) . '</h2>';
            echo '<img src=" ' . get_template_directory_uri() . '/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">';
        echo '</div>';
        echo '<hr class="m-divider m-divider--blue">';
        $args = array(
            'post_type' => 'platillo',
            'posts_per_page' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'categoria',
                    'field' => 'term_id',
                    'terms' => $subcategoria->term_id,
                ),
            ),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            echo '<div class="l-saucers">';
            while ($query->have_posts()) : $query->the_post();
                $horario = get_field('horario');
                $descripcion = get_field('descripcion');
                $precio = get_field('precio');
                ?>
                <div class="m-saucer">
                    <h2 class="m-title--blue"><?php the_title(); ?> / $<?php echo esc_html($precio); ?></h2>
                    <?php if ($horario): ?>
                        <p class="m-title--blue m-txt--l"><?php echo esc_html($horario); ?></p>
                    <?php endif; ?>
                    <?php if ($descripcion): ?>
                        <p class="m-txt--m m-txt--blue pt-1"><?php echo wp_kses_post($descripcion); ?></p>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php echo '</div>'; ?>

            <a href="#categoria" class="m-btn__menu m-txt--s m-title--blue py-3-2">
            << Regresar al menu de comidas y cenas </a>

            <?php get_template_part('template-parts/modules/adornment-4'); ?>
            <?php wp_reset_postdata();
        else :
            echo '<p>No hay platillos en esta subcategoría.</p>';
        endif;
    }
} else {
    echo '<p>No hay subcategorías en esta categoría.</p>';
}
?>