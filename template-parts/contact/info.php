<div class="l-info-contact">
    <a href="tel:<?php echo esc_attr(get_field('telefono_1')); ?>" class="m-contact-info">
        <img class="m-contact-info__img" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/contactIcon-1.png" alt="Icono">
        <span class="m-txt--s m-title--blue"><?php echo esc_html(get_field('telefono_1')); ?></span>
    </a>
    <a href="<?php echo esc_url( 'mailto:' . antispambot( get_field('correo' ) ) ); ?>" class="m-contact-info">
        <img class="m-contact-info__img" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/contactIcon-2.png" alt="Icono">
        <span class="m-txt--s m-title--blue"><?php the_field("correo"); ?></span>
    </a>
    <a href="tel:<?php echo esc_attr(get_field('telefono_2')); ?>" class="m-contact-info">
        <img class="m-contact-info__img" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/contactIcon-1.png" alt="Icono">
        <span class="m-txt--s m-title--blue"><?php echo esc_html(get_field('telefono_2')); ?></span>
    </a>
</div>