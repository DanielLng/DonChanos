<?php
    $contacto = get_page_by_path('contacto');
?>

<section class="l-experience">
    <div class="l-experience__content">
    <div class="m-experience-img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/galería-desayunos.jpg);">
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
    </div>
    <img class="m-experience-adornment" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="">
    </div>
    <div class="m-experience-info">
            <h2 class="m-subtitle m-subtitle--blue">Cenas Románticas</h2>
            <p class="m-txt--blue m-txt--m">Disfruta de un momento único y memorable al lado de esa persona especial para ti.</p>
            <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-btn-menu m-btn-menu--service sh-btn">
                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                <h6 class="m-btn-menu__txt">Quiero reservar</h6>
            </a>
        </div>
</section>