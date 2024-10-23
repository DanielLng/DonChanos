<?php
    $contacto = get_page_by_path('contacto');
    $terms = get_page_by_path('terminos-y-condiciones');
?>

<footer class="l-footer">
    <div class="l-footer--social-networks">
        <div class="m-title m-title--blue">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Síguenos en redes sociales</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="l-social-networks">
            <?php if( have_rows('footer-social-network', 'option') ): ?>
                <?php while( have_rows('footer-social-network', 'option') ): the_row(); 
                    $icon = get_sub_field('footer-social-network-icon');
                    $link = get_sub_field('footer-social-network-link');
                    ?>
                    <a href="<?php echo esc_url($link)?>">
                        <img src="<?php echo $icon; ?>" alt="Red Social">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <img class="l-footer--images display-desktop" src="<?php echo get_field('gallery-images', 'option'); ?>" alt="Barra Imágenes">
    <img class="l-footer--images display-tablet" src="<?php echo get_field('gallery-images-mobile', 'option'); ?>" alt="Barra Imágenes">
    <img class="l-footer--images display-mobile" src="<?php echo get_field('gallery-images-mobile', 'option'); ?>" alt="Barra Imágenes">
    <img class="m-footer-adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/barra-banderas-división-horizontal.png" alt="Adorno">
    
    <?php $logo = get_field('logo', 'option');
    if (!empty($logo)): ?>
        <a class="m-logo" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo" />
        </a>
    <?php endif; ?>

    <div class="l-footer l-footer--menu">
        <?php if (have_rows('navbar_items', 'option')): ?>
            <?php while (have_rows('navbar_items', 'option')): the_row();
                $nav_item = get_sub_field('navbar-item');
            ?>
                <a class="m-footer-item" href="<?php echo get_permalink($nav_item->ID); ?>"><?php echo esc_html($nav_item->post_title); ?></a>
            <?php endwhile; ?>
        <?php endif; ?>
        <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-footer-item">Reserva</a>
    </div>
    <div class="l-footer l-footer--terms">
        <a href="" class="m-footer-item--terms">Aviso de privacidad</a>
        <a href="<?php echo get_permalink($terms->ID); ?>" class="m-footer-item--terms">Términos y condiciones</a>
        <a href="" class="m-footer-item--terms">2024</a>
    </div>
    <div class="l-footer l-footer--copyright">
        <span class="m-footer--copyright">Creado por Add Astra</span>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>