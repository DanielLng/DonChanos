<div class="l-testimonial" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pattern-para-repetir.png);">
    <?php 
        $titulo= get_field('testimonial-title');
        
    ?>
    <div class="l-testimonial__overlay"></div>
    <div class="l-testimonial__content">
        <div class="m-title m-title--blue m-title--spaced">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2><?php echo esc_html($titulo); ?></h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <div class="flexslider flexslider__testimonial flexslider__testimonial--blue">
        <?php if (have_rows('testimonials', 'option')) : ?> 
            <ul class="slides pb-10">
            <?php while (have_rows('testimonials', 'option')) : the_row(); 
                $image = get_sub_field('testimonial-img');
                $name = get_sub_field('testimonial-name');
                $lastname = get_sub_field('testimonial-last-name');
                $state = get_sub_field('testimonial-state');
                $country = get_sub_field('testimonial-country');
                $stars = get_sub_field('testimonial-stars');
                $txt = get_sub_field('testimonial-txt');
            ?>
                <li class="m-flexslider-item m-flexslider-item--testimonial">
                    <div class="m-flexslider-item__personal-info m-flexslider-item__personal-info-2">
                        <div class="m-flexslider-item__personal-info m-flexslider-item__personal-info-2">
                            <img class="m-flexslider-item__personal-info--photo" src="<?php echo esc_url($image); ?>" />
                            <p class="m-flexslider-item__personal-info--name m-txt--l m-title--blue">
                                <?php echo esc_html($name) ?> <?php echo esc_html($lastname); ?>
                            </p>
                            <p class="m-flexslider-item__personal-info--from m-txt--s m-title--blue">
                                <?php echo esc_html($state); ?>, <?php echo esc_html($country); ?>
                            </p>
                        </div>

                        <?php
                            if ($stars) : ?>
                            <div class="m-flexslider-item__stars m-flexslider-item__stars-2">
                                <?php for ($i = 1; $i <= $stars; $i++): ?>
                                <img class="m-flexslider-item__stars--star m-flexslider-item__stars--star-2" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/star-blue.png" alt="Estrella" />
                            <?php endfor; ?>
                            </div>
                        
                        <?php endif; ?>
                      
                    </div>
                    <p class="m-flexslider-item__text m-txt--l m-txt--blue"><?php echo wp_kses_post($txt); ?></p>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </div>
        <div class="custom-navigation custom-navigation__testimonial">
            <a href="#" class="flex-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/left-arrow.png" alt="">
            </a>
            <div class="custom-controls-container custom-controls-container__testimonial"></div>
            <a href="#" class="flex-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/right-arrow.png" alt="">
            </a>
        </div>
    </div>
</div>