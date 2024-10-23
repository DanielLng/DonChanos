<?php
/*
Template Name: contacto
*/
?>
<?php get_header() ?>

<div class="m-title m-title--blue m-title--spaced py-1-4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    <h2>Contáctanos</h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
</div>


<?php get_template_part('template-parts/contact/map'); ?>
<?php get_template_part('template-parts/contact/info'); ?>
<?php get_template_part('template-parts/contact/form'); ?>

<?php get_footer() ?>