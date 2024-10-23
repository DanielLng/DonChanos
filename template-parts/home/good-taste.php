<section class="l-section-highlightedText">
    <?php get_template_part('template-parts/modules/adornment-2') ?>
    <?php
    $title = get_field('high-text-title');
    $text = get_field('high-text-txt');
    $clean_text = wp_strip_all_tags($text);
    if ($title) { ?>
        <div class="m-title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2><?php echo esc_html($title); ?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
    <?php } ?>
    <p class="m-txt--l"><?php echo esc_html($clean_text); ?></p>
</section>