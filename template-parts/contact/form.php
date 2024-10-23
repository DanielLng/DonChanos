<section class="l-form display-desktop">
    <img class="l-form__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
    <div class="l-form__form">
        <p class="m-txt--m m-txt--white">Formulario Para Reservas</p>
        <?php echo do_shortcode('[wpforms id="34"]'); ?>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
    </div>
    <div class="l-form__testimonial">
        <div class="flexslider flexslider__testimonial">
            <?php if (have_rows('testimonials', 'option')) : ?> 
            <ul class="slides">
                <?php while (have_rows('testimonials', 'option')) : the_row(); 
                    $image = get_sub_field('testimonial-img');
                    $name = get_sub_field('testimonial-name');
                    $lastname = get_sub_field('testimonial-last-name');
                    $state = get_sub_field('testimonial-state');
                    $country = get_sub_field('testimonial-country');
                    $stars = get_sub_field('testimonial-stars');
                    $txt = get_sub_field('testimonial-txt');
                ?>
                <li>
                    <div class="m-flexslider-item__personal-info py-1">
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
                        <div class="m-flexslider-item__stars py-1">
                            <?php for ($i = 1; $i <= $stars; $i++): ?>
                            <img class="m-flexslider-item__stars--star" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/star-blue.png" alt="Estrella" />
                        <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                    <p class="m-flexslider-item__text m-txt--m m-title--blue py-1"><?php echo wp_kses_post($txt); ?></p>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>

        </div>
        <div class="custom-navigation custom-navigation__testimonial custom-navigation__testimonial2">
            <a href="#" class="flex-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/left-arrow.png" alt="">
            </a>
            <div class="custom-controls-container__testimonial"></div>
            <a href="#" class="flex-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/right-arrow.png" alt="">
            </a>
        </div>
    </div>
</section>

<section class="l-form display-tablet">
    <div class="l-form__form">
        <img class="l-form__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
        <p class="m-txt--m m-txt--white">Formulario Para Reservas</p>
        <?php echo do_shortcode('[wpforms id="34"]'); ?>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <img class="l-form__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
    </div>
    <div class="l-form__testimonial">
        <div class="flexslider flexslider__testimonial--form">
        <ul class="slides">
                <?php while (have_rows('testimonials', 'option')) : the_row(); 
                    $image = get_sub_field('testimonial-img');
                    $name = get_sub_field('testimonial-name');
                    $lastname = get_sub_field('testimonial-last-name');
                    $state = get_sub_field('testimonial-state');
                    $country = get_sub_field('testimonial-country');
                    $stars = get_sub_field('testimonial-stars');
                    $txt = get_sub_field('testimonial-txt');
                ?>
                <li>
                    <div class="m-flexslider-item__personal-info py-1">
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
                        <div class="m-flexslider-item__stars py-1">
                            <?php for ($i = 1; $i <= $stars; $i++): ?>
                            <img class="m-flexslider-item__stars--star" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/star-blue.png" alt="Estrella" />
                        <?php endfor; ?>
                        </div>
                    <?php endif; ?>
                    <p class="m-flexslider-item__text m-txt--m m-title--blue py-1"><?php echo wp_kses_post($txt); ?></p>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</section>