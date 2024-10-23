<?php
    $contacto = get_page_by_path('contacto');    
?>

<section class="l-section-personalExperience">
<img class="l-section-personalExperience__divider" src="<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-horizontal.png" alt="Adorno">
    <div class="m-title m-title--blue m-title--spaced-two">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        <h2>También puedes cotizar tu experiencia personalizada</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    </div>
    <div class="m-cover m-cover--s mx-1" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/index/hero_image_index.jpg);">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
    </div>
    <p class="m-txt--m m-txt--blue p-1-19">Te ayudamos a planear la experiencia justo como tu la imaginas, contáctanos y encontremos juntos la mejor forma de llevarla acabo.</p>
    <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn">
        <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
        <h6 class="m-btn-menu__txt">Quiero cotizar un evento</h6>
    </a>
</section>