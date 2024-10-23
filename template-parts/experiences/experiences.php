<?php
    $menu = get_page_by_path('menu');
    $experiencia = get_page_by_path('experiencia');
    $paqueteRomántico = get_page_by_path('paquete-romantico');
    $eventos = get_page_by_path('eventos');
?>

<div class="m-title m-title--blue m-title--spaced-three display-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    <h2>Conoce nuestras experiencias</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
</div>

<section class="l-section-listing l-section-listing--2 display-desktop">
    <article class="m-list-item">
        <div class="m-list-item__info">
            <h2 class="m-subtitle m-subtitle--blue">Paquete Romántico</h2>
            <p class="m-txt--blue m-txt--m">Nuestros paquetes son una maravillosa opción para sorprender a tu pareja y celebrar un momento inolvidable.</p>
            <a href="<?php echo get_permalink($paqueteRomántico->ID); ?>" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Saber más</h6>
            </a>
        </div>
        <div class="m-list-item__images">
            <div class="m-list-item__images--content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                <div class="m-list-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_6.jpeg);">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                </div>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__info">
            <h2 class="m-subtitle m-subtitle--blue">Desayuno & Comida Sorpresa</h2>
            <p class="m-txt--blue m-txt--m">Nuestras cajitas sorpresa son el regalo perfecto que siempre te hará quedar bien con tu persona favorita.</p>
            <a href="javascript:(void)" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Saber más</h6>
            </a>
        </div>
        <div class="m-list-item__images">
            <div class="m-list-item__images--content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                <div class="m-list-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_15.jpeg);">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                </div>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__info">
            <h2 class="m-subtitle m-subtitle--blue">Pasteles Completos</h2>
            <p class="m-txt--blue m-txt--m">Nuestros ricos pasteles hechos en casa son el complemento ideal de una bonita celebración, pidelos para consumir en el restaurante o para llevar.</p>
            <a href="javascript:(void)" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Saber más</h6>
            </a>
        </div>
        <div class="m-list-item__images">
            <div class="m-list-item__images--content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                <div class="m-list-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/pasteles_completos.jpg);">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                </div>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__info">
            <h2 class="m-subtitle m-subtitle--blue">Tablita's Chano's</h2>
            <p class="m-txt--blue m-txt--m">Botana gourmet con mezcla de quesos, carnes frias, frutos rojos y complementos, ideal para celebrar y compartir!</p>
            <a href="javascript:(void)" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Saber más</h6>
            </a>
        </div>
        <div class="m-list-item__images">
            <div class="m-list-item__images--content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                <div class="m-list-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_18.jpeg);">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                </div>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__info">
            <h2 class="m-subtitle m-subtitle--blue">¿Celebras algo? Reservaciones con "Montaje Especial de Mesa"</h2>
            <p class="m-txt--blue m-txt--m">Si celebras algo, contrata nuestro paquete con menú, especialmente diseñado para reservas a partir de 10 personas y te obsequiamos el montaje de lujo.</p>
            <a href="javascript:(void)" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Saber más</h6>
            </a>
        </div>
        <div class="m-list-item__images">
            <div class="m-list-item__images--content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                <div class="m-list-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_5.jpeg);">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                </div>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__info">
            <h2 class="m-subtitle m-subtitle--blue">¿Es tu cumpleaños?</h2>
            <p class="m-txt--blue m-txt--m">Te obsequiamos un rico pastelito cumpleañero.</p>
            <a href="javascript:(void)" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Saber más</h6>
            </a>
        </div>
        <div class="m-list-item__images">
            <div class="m-list-item__images--content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                <div class="m-list-item__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_23.jpeg);">
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                    <canvas class="m-corner"></canvas>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="l-section-listing display-tablet">

    <div class="m-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        <h2>Conoce nuestras experiencias</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    </div>
    <article class="m-list-item">
        <div class="m-list-item__images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
            <div class="m-list-item__images--img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_6.jpeg);">
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
        </div>
        <div class="m-list-item__info">
            <div class="m-list-item__info--left">
                <h2 class="m-title--blue">Paquete Romántico</h2>
                <p class="m-txt--m">Nuestros paquetes son una maravillosa opción para sorprender a tu pareja y celebrar un momento inolvidable.</p>
            </div>
            <div class="m-list-item__info--right">
                <a href="<?php echo get_permalink($paqueteRomántico->ID); ?>" class="m-btn sh-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                    <span>Saber más</span>
                </a>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
            <div class="m-list-item__images--img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_15.jpeg);">
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
        </div>
        <div class="m-list-item__info">
            <div class="m-list-item__info--left">
                <h2 class="m-title--blue">Desayuno & Comida Sorpresa</h2>
                <p class="m-txt--m">Nuestras cajitas sorpresa son el regalo perfecto que siempre te hará quedar bien con tu persona favorita.</p>
            </div>
            <div class="m-list-item__info--right">
                <a href="javascript:(void)" class="m-btn sh-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                    <span>Saber más</span>
                </a>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
            <div class="m-list-item__images--img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/pasteles_completos.jpg);">
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
        </div>
        <div class="m-list-item__info">
            <div class="m-list-item__info--left">
                <h2 class="m-title--blue">Pasteles Completos</h2>
                <p class="m-txt--m">Nuestros ricos pasteles hechos en casa son el complemento ideal de una bonita celebración, pidelos para consumir en el restaurante o para llevar.</p>
            </div>
            <div class="m-list-item__info--right">
                <a href="javascript:(void)" class="m-btn sh-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                    <span>Saber más</span>
                </a>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
            <div class="m-list-item__images--img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_18.jpeg);">
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
        </div>
        <div class="m-list-item__info">
            <div class="m-list-item__info--left">
                <h2 class="m-title--blue">Tablita's Chano's</h2>
                <p class="m-txt--m">Botana gourmet con mezcla de quesos, carnes frias, frutos rojos y complementos, ideal para celebrar y compartir!</p>
            </div>
            <div class="m-list-item__info--right">
                <a href="javascript:(void)" class="m-btn sh-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                    <span>Saber más</span>
                </a>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
            <div class="m-list-item__images--img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_5.jpeg);">
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
        </div>
        <div class="m-list-item__info">
            <div class="m-list-item__info--left">
                <h2 class="m-title--blue">¿Celebras algo? Reservaciones con "Montaje Especial de Mesa"</h2>
                <p class="m-txt--m">Si celebras algo, contrata nuestro paquete con menú, especialmente diseñado para reservas a partir de 10 personas y te obsequiamos el montaje de lujo.</p>
            </div>
            <div class="m-list-item__info--right">
                <a href="javascript:(void)" class="m-btn sh-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                    <span>Saber más</span>
                </a>
            </div>
        </div>
    </article>
    <article class="m-list-item">
        <div class="m-list-item__images">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
            <div class="m-list-item__images--img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_experiencias/EXPERIENCIA_23.jpeg);">
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
                <canvas class="m-corner"></canvas>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
        </div>
        <div class="m-list-item__info">
            <div class="m-list-item__info--left">
                <h2 class="m-title--blue">¿Es tu cumpleaños?</h2>
                <p class="m-txt--m">Te obsequiamos un rico pastelito cumpleañero.</p>
            </div>
            <div class="m-list-item__info--right">
                <a href="javascript:(void)" class="m-btn sh-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                    <span>Saber más</span>
                </a>
            </div>
        </div>
    </article>

</section>