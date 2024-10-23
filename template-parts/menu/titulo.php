<?php
$restaurante = get_page_by_path('restaurante');
?>

<a href="<?php echo get_permalink($restaurante->ID); ?>" class="m-btn__menu m-txt--s m-title--blue display-desktop">
    << Regresar al menu principal
</a>
<a href="<?php echo get_permalink($restaurante->ID); ?>" class="m-btn__menu m-txt--sl d-flex pt-2 m-title--blue display-tablet">
    << Regresar al menu principal
</a>

<div class="m-title m-title--blue m-title--l my-3">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    <h2><?php single_term_title(); ?></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
</div>