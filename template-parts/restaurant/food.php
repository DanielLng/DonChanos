<?php
$menu = get_page_by_path('menu');
?>

<section class="l-food mt-4 ">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <?php if( have_rows('dishes-slider') ): ?>
            <?php while( have_rows('dishes-slider') ): the_row(); ?>
                <div class="m-food__category">
                    <div class="flexslider flexslider__food">
                        <canvas class="m-corner"></canvas>
                        <canvas class="m-corner"></canvas>
                        <canvas class="m-corner"></canvas>
                        <canvas class="m-corner"></canvas>
                        <ul class="slides">
                            <?php 
                            $images = get_sub_field('imagenes_del_platillo');
                            if ($images): // Verifica si el campo contiene imágenes
                                foreach( $images as $image_id ): 
                                    $term = get_sub_field('platillo-link'); // Obtiene el término de la taxonomía
                                    if ($term) {
                                        $term_link = get_term_link($term);
                                        if (!is_wp_error($term_link)): ?>
                                            <li style="background-image: url(<?php echo esc_url($image_id); ?>);">
                                                <a href="<?php echo esc_url($term_link); ?>" class="m-flexslider__food--link"></a>
                                            </li>
                                        <?php endif;
                                    }
                                endforeach;
                            endif; ?>
                        </ul>
                    </div>
                    <p class="m-txt--l m-title--blue m-food__text"><?php echo esc_html(get_sub_field('titulo_de_la_seleccion_de_platillos')); ?></p>
                    <a href="<?php echo esc_url($term_link); ?>" class="m-btn m-flexslider__food--link-mob">Ver más</a>
                </div>
                <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
                

            <?php endwhile; ?>
    <?php endif; ?>
</section>





    <!--<div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Desayunos</p>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-1.jpg);">
                    <a href="<?php echo get_permalink($menu->ID); ?>" class="m-flexslider__food--link"></a>
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-2.jpg);">
                    <a href="<?php echo get_permalink($menu->ID); ?>" class="m-flexslider__food--link"></a>
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-3.jpg);">
                    <a href="<?php echo get_permalink($menu->ID); ?>" class="m-flexslider__food--link"></a>
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-4.jpg);">
                    <a href="<?php echo get_permalink($menu->ID); ?>" class="m-flexslider__food--link"></a>
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Comidas y Cenas</p>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Menú infantil</p>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>-->
</section>


<!--
<section class="l-food mb-8 display-desktop">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Bebidas</p>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-3.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Cafetería y Postres</p>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Combos</p>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food display-tablet display-none">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Desayunos</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Comidas y Cenas</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>
<section class="l-food display-tablet display-none">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Menú infantil</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Bebidas</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>
<section class="l-food mb-8 display-tablet display-none">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-3.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Cafetería y Postres</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="flexslider flexslider__food">
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Combos</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food display-mobile">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <div class="flexslider flexslider__food">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/desayunos-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Desayunos</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food display-mobile">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <div class="flexslider flexslider__food">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/bebidas-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Bebidas</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food display-mobile">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <div class="flexslider flexslider__food">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/postre-3.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Cafetería y Postres</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food display-mobile">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <div class="flexslider flexslider__food">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/comidas-y-cenas-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Comidas y Cenas</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food display-mobile">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <div class="flexslider flexslider__food">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/botana-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Menú infantil</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section>

<section class="l-food mb-5 display-mobile">
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
    <div class="m-food__category">
        <div class="flexslider flexslider__food">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <ul class="slides">
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-1.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-2.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-3.jpg);">
                </li>
                <li style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/combo-4.jpg);">
                </li>
            </ul>
        </div>
        <p class="m-txt--l m-title--blue m-food__text">Combos</p>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn m-flexslider__food--link">Ver más</a>
    </div>
    <div class="m-food-adornment" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-vertical.png);"></div>
</section> -->