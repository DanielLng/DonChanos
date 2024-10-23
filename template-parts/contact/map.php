<section class="l-map">
    <img class="l-map__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
    <div class="l-map__map">
    <iframe src="<?php echo esc_attr( get_field('map') ); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
    </div>
    <img class="l-map__decoration" src="<?php echo get_template_directory_uri(); ?>/assets/index/adorno-talavera-trasnparente.png" alt="Decoración">
</section>