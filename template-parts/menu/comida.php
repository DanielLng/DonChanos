<?php
$subcategorias = get_terms(array(
    'taxonomy' => 'categoria',
    'parent' => get_queried_object()->term_id,
    'hide_empty' => true,
));?>

<section class="l-food" id="categoria">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <?php if ($subcategorias) {
        foreach ($subcategorias as $subcategoria) { ?>
            <div class="m-food__category">
                <div class="flexslider flexslider__food">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <ul class="slides">
                        <?php $args = array(
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
                            while ($query->have_posts()) : $query->the_post();
                                $imagen_destacada = get_field('imagen_destacada');
                                if ($imagen_destacada): ?>
                                    <li style="background-image: url(<?php echo esc_url($imagen_destacada); ?>);">
                                        <a href="#<?php echo esc_html($subcategoria->name) ?>" class="m-flexslider__food--link"></a>
                                    </li>
                                <?php endif;
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>No hay platillos en esta subcategoría.</p>';
                        endif; ?>
                    </ul>
                </div>
                <p class="m-txt--l m-title--blue m-food__text"><?php echo esc_html($subcategoria->name) ?></p>
                <a href="#<?php echo esc_html($subcategoria->name) ?>" class="m-btn m-flexslider__food--link-mob">Ver más</a>
            </div>
        <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
        <?php }
    } else {
        echo '<p>No hay subcategorías en esta categoría.</p>';
    } ?>
</section>