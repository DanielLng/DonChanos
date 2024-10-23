<?php
$contacto = get_page_by_path('contacto');
?>

<section class="l-experience l-experience--event display-desktop">
    <div class="l-experience__content">
        <div class="m-experience-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_eventos/EVENTOS_D.jpeg);">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
        </div>
        <img class="m-experience-adornment" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="">
    </div>
    <div class="m-experience-info">
        <h2 class="m-subtitle m-subtitle--blue">Paquete Desayuno</h2>
        <p class="m-txt--blue m-txt--m">Conoce éstos paquetes que tenemos diseñados especialmente para ti.</p>
        <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-btn-menu m-btn-menu--service sh-btn">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Quiero reservar</h6>
        </a>
    </div>
</section>

<section class="l-experience display-tablet">
    <div class="l-experience__content">
        <div class="m-experience-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/Fotos_eventos/EVENTOS_D.jpeg);">
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
            <canvas class="m-corner"></canvas>
        </div>
        <img class="m-experience-adornment" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="">
        <img class="m-experience-adornment" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="">
    </div>
    <div class="m-experience-info">
        <div class="m-experience-info__left">
            <h2 class="m-subtitle m-subtitle--blue">Paquete Desayuno</h2>
            <p class="m-txt--blue m-txt--m">Conoce éstos paquetes que tenemos diseñados especialmente para ti.</p>
        </div>
        <div class="m-experience-info__right">
            <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-btn sh-btn">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <span>Quiero reservar</span>
            </a>
        </div>
    </div>
</section>