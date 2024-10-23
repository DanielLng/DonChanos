<?php
$menu = get_page_by_path('menu');
$experiencias = get_page_by_path('experiencias');
$eventos = get_page_by_path('eventos');


$title = get_field('services-title');

?>

<div class="m-title m-title--blue m-title--spaced-three display-desktop">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    <h2><?php echo esc_html($title); ?></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
</div>

<section class="l-section-listing display-desktop">
    <?php if( have_rows('services') ): ?>
        <?php while( have_rows('services') ): the_row(); 
            $service = get_sub_field('service'); 
            
            if( $service ): 
                $service_name = $service['service-name'];  
                $service_txt = $service['service-txt'];   
                $service_img = $service['service-img'];   
                $service_txt_btn = $service['service-btn-txt'];  
                $service_link_btn = $service['service-btn-link'];  
            ?>

            <article class="m-list-item">
                <div class="m-list-item__info">
                    <?php if( !empty($service_name) ): ?>
                        <h2 class="m-subtitle m-subtitle--blue"><?php echo esc_html($service_name); ?></h2>
                    <?php endif; ?>

                    <?php if( !empty($service_txt) ): ?>
                        <p class="m-txt--blue m-txt--m"><?php echo wp_kses_post($service_txt); ?></p>
                    <?php endif; ?>

                    <?php if( !empty($service_link_btn) && !empty($service_txt_btn) ): ?>
                        <a href="<?php echo esc_url($service_link_btn); ?>" class="m-btn sh-btn">
                            <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                            <h6 class="m-btn-menu__txt"><?php echo esc_html($service_txt_btn); ?></h6>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="m-list-item__images">
                    <div class="m-list-item__images--content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                        <?php if( !empty($service_img) ): ?>
                            <div class="m-list-item__img" style="background-image: url(<?php echo ($service_img); ?>)">
                                <canvas class="m-corner"></canvas>
                                <canvas class="m-corner"></canvas>
                                <canvas class="m-corner"></canvas>
                                <canvas class="m-corner"></canvas>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </article>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<section class="l-section-listing display-tablet">
    <div class="m-title">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        <h2><?php echo esc_html($title); ?></h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    </div>

    <?php if( have_rows('services') ): ?>
        <?php while( have_rows('services') ): the_row(); 
            $service = get_sub_field('service'); 
            
            if( $service ): 
                $service_name = $service['service-name'];  
                $service_txt = $service['service-txt'];   
                $service_img = $service['service-img'];   
                $service_txt_btn = $service['service-btn-txt'];  
                $service_link_btn = $service['service-btn-link'];  
            ?>

            <article class="m-list-item">
                <div class="m-list-item__images">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración" class="m-list-item__decoration">
                    <?php if( !empty($service_img) ): ?>
                        <div class="m-list-item__images--img" style="background-image: url(<?php echo ($service_img); ?>)">
                            <canvas class="m-corner"></canvas>
                            <canvas class="m-corner"></canvas>
                            <canvas class="m-corner"></canvas>
                            <canvas class="m-corner"></canvas>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="m-list-item__info">
                    <div class="m-list-item__info--left">
                        <?php if( !empty($service_name) ): ?>
                            <h2 class="m-title--blue"><?php echo esc_html($service_name); ?></h2>
                        <?php endif; ?>

                        <?php if( !empty($service_txt) ): ?>
                            <p class="m-txt--blue m-txt--m"><?php echo wp_kses_post($service_txt); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="m-list-item__info--right">
                        <?php if( !empty($service_link_btn) && !empty($service_txt_btn) ): ?>
                            <a href="<?php echo esc_url($service_link_btn); ?>" class="m-btn sh-btn">
                                <img class="m-btn-menu__icon" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                                <h6 class="m-btn-menu__txt"><?php echo esc_html($service_txt_btn); ?></h6>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </article>

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</section>