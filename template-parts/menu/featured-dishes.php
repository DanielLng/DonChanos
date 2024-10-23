<?php
    $restaurante = get_page_by_path('restaurante');
?>

<section class="l-featured-dishes display-none" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/platillos_destacados_fondo.jpg);">
    <div class="l-featured-dishes__overlay">
    </div>
    <img class="m-featured-dishes__adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/adorno-talavera.png" alt="Adorno">
    <img class="m-featured-dishes__adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/adorno-talavera.png" alt="Adorno">
    <div class="l-featured-dishes__content">
        <?php 
            $title = get_field('featured-dishes-title', 'option');
        ?>
        <div class="m-title m-title--white">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2><?php echo esc_html($title); ?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="flexslider flexslider__featured-dishes">
            <?php if( have_rows('featured-dishes', 'option') ): ?>
                <ul class="slides">
                <?php while( have_rows('featured-dishes', 'option') ): the_row(); 
                    $image = get_sub_field('featured-dish-img');
                    $name = get_sub_field('featured-dish-name');
                    $txt = get_sub_field('featured-dish-txt');
                    ?>
                    <li>
                        <div class="m-featured-dish__img" style="background-image: url(<?php echo esc_url($image); ?>">
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                        </div>
                        <p class="m-txt--l m-title--white py-3-2"><?php echo esc_html($name); ?></p>
                        <p class="m-txt--xs m-title--white"><?php echo wp_kses_post($txt)?></p>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            <div class="custom-navigation custom-navigation__featured-dishes">
                <a href="#" class="flex-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/left-arrow.png" alt="">
                </a>
                <div class="custom-controls-container custom-controls-container__featured-dishes"></div>
                <a href="#" class="flex-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/right-arrow.png" alt="">
                </a>
            </div>
        </div>
        <a href="<?php echo get_permalink($restaurante->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn mt-4">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Ver Menú</h6>
        </a>
    </div>
</section>

<section class="l-featured-dishes-mob display-mobile" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/platillos_destacados_fondo.jpg);">
    <div class="l-featured-dishes__overlay">
    </div>
    <img class="m-featured-dishes__adornment" src="<?php echo get_template_directory_uri(); ?>/assets/general/adorno-talavera.png" alt="Adorno">
    <div class="l-featured-dishes__content">
        <div class="m-title m-title--white">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Opciones de temporada</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="flexslider flexslider__featured-dishes-mob">
        <?php if( have_rows('featured-dishes', 'option') ): ?>
                <ul class="slides">
                <?php while( have_rows('featured-dishes', 'option') ): the_row(); 
                    $image = get_sub_field('featured-dish-img');
                    $name = get_sub_field('featured-dish-name');
                    $txt = get_sub_field('featured-dish-txt');
                    ?>
                    <li>
                        <div class="m-featured-dish__img" style="background-image: url(<?php echo esc_url($image); ?>">
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                            <canvas class="m-corner m-corner--blue-2"></canvas>
                        </div>
                        <p class="m-txt--l m-title--white py-3-2"><?php echo esc_html($name); ?></p>
                        <p class="m-txt--xs m-title--white"><?php echo wp_kses_post($txt)?></p>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; ?>
            
        </div>
        <a href="<?php echo get_permalink($restaurante->ID); ?>" class="m-btn-menu m-btn-menu--cover m-btn sh-btn mt-4">
            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
            <h6 class="m-btn-menu__txt">Ver Menú</h6>
        </a>
    </div>
</section>
<?php get_template_part('template-parts/modules/adornment-3') ?>