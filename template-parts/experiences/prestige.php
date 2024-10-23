<?php
    $contacto = get_page_by_path('contacto');
?>

<section class="l-prestige">
    <div class="l-prestige__content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pattern-para-repetir2.png);">
        <div class="m-title m-title--blue m-title--white m-title--spaced-2">
            <img class="m-title__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Experiencias para +100 personas</h2>
            <img class="m-title__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="l-prestige__content--info">
            <div class="l-prestige__content--info__img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/servicios-eventos.jpg);"></div>
            <p class="m-txt--s m-title--white">¿Estás buscando llevar a acabo un evento muy grande? En Chano's contamos con la logística y experiencia necesaria para ayudarte a llevar a cabo tu evento. Contáctanos para que podamos ayudarte a lograr lo que buscas.</p>
        </div>
        <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn mt-2">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Reserva</h6>
        </a>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <img class="l-prestige__content--decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
        <img class="l-prestige__content--decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
    </div>
</section>