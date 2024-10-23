<?php
/*
Template Name: menu
*/
?>
<?php get_header() ?>

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
                    <h2>Comidas y Cenas</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
                </div>

                <?php get_template_part('template-parts/menu/featured-dishes'); ?>
                <?php get_template_part('template-parts/menu/food'); ?>
                <?php get_template_part('template-parts/menu/after-text'); ?>
                <?php get_template_part('template-parts/menu/botanas'); ?>
                <?php get_template_part('template-parts/modules/adornment-4'); ?>
                <?php get_template_part('template-parts/menu/sopas'); ?>
                <?php get_template_part('template-parts/modules/adornment-4'); ?>
                <?php get_template_part('template-parts/menu/ensaladas'); ?>
                <?php get_template_part('template-parts/modules/adornment-4'); ?>
                <?php get_template_part('template-parts/menu/mexicanos'); ?>
                <?php get_template_part('template-parts/modules/adornment-4'); ?>
                <?php get_template_part('template-parts/menu/pollo'); ?>
                <?php get_template_part('template-parts/modules/adornment-4'); ?>
                <?php get_template_part('template-parts/menu/mar'); ?>
                <?php get_template_part('template-parts/menu/btn'); ?>

                <?php get_footer() ?>