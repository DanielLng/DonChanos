<?php
    $contacto = get_page_by_path('contacto');
?>

<div class="m-cover mx-1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/index/hero_image_index.jpg);">
    <canvas class="m-corner"></canvas>
    <canvas class="m-corner"></canvas>
    <canvas class="m-corner"></canvas>
    <canvas class="m-corner"></canvas>
    <div class="m-cover__lines-x"></div>
    <div class="m-cover__lines-y"></div>
    <div class="m-cover__info">
        <h6 class="m-cover__info--subtitle">En Don Chanos nos destacamos también por nuestras</h6>
        <h1 class="m-cover__info--title">Experiencias</h1>
        <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Reserva</h6>
        </a>
    </div>
</div>