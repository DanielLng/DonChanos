<section class="l-section-highlightedText">
    <div class="mx-4">
    </div>
    <div class="m-title m-title--blue">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        <h2><?php echo esc_html(get_field('restaurant-title')); ?></h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    </div>
    <p class="m-txt--blue m-txt--l"><?php echo wp_kses_post ( get_field('restaurant-txt') ); ?></p>
</section>