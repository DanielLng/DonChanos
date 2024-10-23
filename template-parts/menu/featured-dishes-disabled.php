<?php
    $menu = get_page_by_path('menu');
?>

<section class="l-featured-dishes display-none" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/platillos_destacados_fondo.jpg);">
    <div class="l-featured-dishes__overlay">
    </div>
    <img class="m-featured-dishes__adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/adorno-talavera.png" alt="Adorno">
    <img class="m-featured-dishes__adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/adorno-talavera.png" alt="Adorno">
    <div class="l-featured-dishes__content">
        <div class="m-title m-title--white">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Opciones de temporada</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="flexslider flexslider__featured-dishes">
            <ul class="slides">
                <li>
                    <div class="m-featured-dish__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pasta.png);">
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                    </div>
                    <p class="m-txt--l m-title--white py-3-2">Pasta al pico de gallo con carne (456 g)</p>
                    <p class="m-txt--xs m-title--white">Plato de pasta tradicional acompañado de salsa de tomate y nuestro delicioso pico de gallo preparado al estilo Chano's</p>
                </li>
                <li>
                    <div class="m-featured-dish__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/platillo_destacado_chilaquiles.jpg);">
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                    </div>
                    <p class="m-txt--l m-title--white py-3-2">Plato de Chilaquiles con pollo (396 g) / $350</p>
                    <p class="m-txt--xs m-title--white">Chilaquiles tradicionales preparados con totopo y salsa de la casa acompañados con deliciosas y tiernas tiras de pechuga, aguacate, crema y vegetales.</p>
                </li>
                <li>
                    <div class="m-featured-dish__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pasta.png);">
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                    </div>
                    <p class="m-txt--l m-title--white py-3-2">Pasta al pico de gallo con carne (456 g)</p>
                    <p class="m-txt--xs m-title--white">Plato de pasta tradicional acompañado de salsa de tomate y nuestro delicioso pico de gallo preparado al estilo Chano's</p>
                </li>
            </ul>
            <div class="custom-navigation custom-navigation__featured-dishes">
                <a href="#" class="flex-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/left-arrow.png" alt="">
                </a>
                <div class="custom-controls-container custom-controls-container__featured-dishes"></div>
                <a href="#" class="flex-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/right-arrow.png" alt="">
                </a>
            </div>
        </div>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn mt-4">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Ver Menú</h6>
        </a>
    </div>
</section>

<section class="l-featured-dishes-mob display-mobile" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/platillos_destacados_fondo.jpg);">
    <div class="l-featured-dishes__overlay">
    </div>
    <img class="m-featured-dishes__adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/adorno-talavera.png" alt="Adorno">
    <div class="l-featured-dishes__content">
        <div class="m-title m-title--white">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Opciones de temporada</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="flexslider flexslider__featured-dishes-mob">
            <ul class="slides">
                <li>
                    <div class="m-featured-dish__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pasta.png);">
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                    </div>
                    <p class="m-txt--l m-title--white py-3-2">Pasta al pico de gallo con carne (456 g)</p>
                    <p class="m-txt--xs m-title--white">Plato de pasta tradicional acompañado de salsa de tomate y nuestro delicioso pico de gallo preparado al estilo Chano's</p>
                </li>
                <li>
                    <div class="m-featured-dish__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/platillo_destacado_chilaquiles.jpg);">
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                    </div>
                    <p class="m-txt--l m-title--white py-3-2">Plato de Chilaquiles con pollo (396 g) / $350</p>
                    <p class="m-txt--xs m-title--white">Chilaquiles tradicionales preparados con totopo y salsa de la casa acompañados con deliciosas y tiernas tiras de pechuga, aguacate, crema y vegetales.</p>
                </li>
                <li>
                    <div class="m-featured-dish__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pasta.png);">
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                        <canvas class="m-corner m-corner--blue-2"></canvas>
                    </div>
                    <p class="m-txt--l m-title--white py-3-2">Pasta al pico de gallo con carne (456 g)</p>
                    <p class="m-txt--xs m-title--white">Plato de pasta tradicional acompañado de salsa de tomate y nuestro delicioso pico de gallo preparado al estilo Chano's</p>
                </li>
            </ul>
        </div>
        <a href="<?php echo get_permalink($menu->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn mt-4">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Ver Menú</h6>
        </a>
    </div>
</section>
<?php get_template_part('template-parts/modules/adornment-3') ?>