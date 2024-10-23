<?php get_template_part('template-parts/modules/adornment-3') ?>
<section class="l-gallery" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/index/pattern-para-repetir2.png);">
    <div class="m-title m-title--white m-title--spaced-two">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        <h2>Galería</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
    </div>

    <script>
        <?php
            // Check rows exists.
            
            if( have_rows('galeria') ):
            
                // Loop through rows.
                $i = 0;
                $gallery = array();
                while( have_rows('galeria') ) : the_row();
                    
                    // Load sub field value.
                    $txt = get_sub_field('titulo'); 

                    $images = get_sub_field('galeria');
                    $image_url = [];

                    
                    //$gallery[] = $i;


                    if( $images ): 
                        foreach( $images as $image_id ): 
                            $gallery[$i][] = $image_id; 
                        endforeach;
                    endif; 


                    /*if( $images ): 
                        $i=0;
                        foreach( $images as $image_id ): 
                            $i++;
                            $image_url[] = $image_id; 
                            
                        endforeach;
                    endif; */
                    
                    $i++;
                    ?>
                <?php endwhile;
            
            // No value.
            else :
                // Do something...
            endif;
            ?>
            var gallery = <?php echo json_encode($gallery); ?>;
    </script>

    <div class="flexslider flexslider__gallery">
        <ul class="slides">
            <?php
            if( have_rows('galeria') ):
                $y=0;
                while( have_rows('galeria') ) : the_row();
                    $y++;

                    $txt = get_sub_field('titulo'); 

                    $images = get_sub_field('galeria');
                    $image_url = '';
                    $class = '';
                    $image_code = '';

                    if( $images ): 
                        $i=0;
                        foreach( $images as $image_id ): 
                            $i++;
                            $image_url = $image_id; 
                            if($i==1) break;
                            
                        endforeach;
                    endif; 

                    if ($y % 2 == 0) {
                        $class = "m-flexslider-adornment--even";
                        $image_code = "ab";
                    } else{
                        $image_code = "ar";
                    }
                    
                    ?>
                    <li>
                        <div class="l-slider-item">
                            <div class="m-flexslider-adornment <?php echo $class ?>" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/general/banderas-iz-<?php echo $image_code; ?>.png);"></div>
                            <a class="m-flexslider-item m-flexslider-item__img js-open-slider-gallery" style="background-image: url(<?php echo $image_url; ?>)" href="" data-index="<?php echo $y; ?>" >
                                <div class="m-flexslider-item__category-name">
                                    <h2 class="m-flexslider-item__personal-info--name m-title--white"><?php echo esc_html($txt)?></h2>
                                </div>
                                <canvas class="m-corner m-corner--blue"></canvas>
                                <canvas class="m-corner m-corner--blue"></canvas>
                                <canvas class="m-corner m-corner--blue"></canvas>
                                <canvas class="m-corner m-corner--blue"></canvas>
                            </a>
                        </div>
                    </li>
                <?php endwhile;
            
            else :
            endif;
            ?>
        </ul>
        <div class="custom-navigation custom-navigation__gallery">
            <a href="#" class="flex-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/left-arrow.png" alt="">
            </a>
            <div class="custom-controls-container custom-controls-container__gallery"></div>
            <a href="#" class="flex-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/right-arrow.png" alt="">
            </a>
        </div>
    </div>
</section>

<div class="modalDialog">
    <div>
        <div class="m-title m-title--white">
            <img class="m-title__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Restaurante</h2>
            <img class="m-title__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <div class="kill-flexslider">&times;</div>
        </div>
        <div class="flexslider flexslider__gallery-modal">
          <ul class="slides">
                
          </ul>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/modules/adornment-3') ?>

<!--<div id="openModal" class="modalDialog">
    <div>
        <div class="m-title m-title--white">
            <img class="m-title__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
            <h2>Restaurante</h2>
            <img class="m-title__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/iconos/adorno_titulos_azul.png" alt="Adorno Título">
        </div>
        <a href="#close" title="Close" class="close">X</a>
        <div class="flexslider flexslider__modal">
            <ul class="slides">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/index/galería-restaurante.jpg" />
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/index/galería-restaurante.jpg" />
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/index/galería-restaurante.jpg" />
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/index/galería-restaurante.jpg" />
                </li>
            </ul>
        </div>
        <div class="custom-navigation custom-navigation__modal">
            <a href="#" class="flex-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/left-arrow.png" alt="">
            </a>
            <div class="custom-controls-container custom-controls-container__featured-modal"></div>
            <a href="#" class="flex-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/right-arrow.png" alt="">
            </a>
        </div>
    </div>
</div>-->