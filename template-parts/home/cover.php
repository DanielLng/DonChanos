<?php
$cover = get_field('cover');
$snd_txt = $cover['cover-snd-txt'];
$main_txt = $cover['cover-main-txt'];
$img = $cover['cover-background-image'];
$video = $cover['cover-background-video'];
$background_selection = $cover['cover-background-selection'];
$btn_selection = $cover['cover-selection-btn'];
$btn = $cover['cover-btn'];
$btn_link = $cover['cover-btn']['cover-btn-link'];
$btn_txt = $cover['cover-btn']['cover-btn-txt'];
if ($cover): ?>
    <?php 
    if( $background_selection == '1' ) { ?>
        <div class="m-cover" style="background-image: url(<?php echo $img ?>)">
    <?php } 
    elseif( $background_selection == '2' ) { ?>
        <div class="m-cover">
            <video autoplay muted loop id="background-video">
                <source src="<?php echo $video ?>">
            </video>
    <?php } ?>
        <div class="m-cover__overlay"></div>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <canvas class="m-corner"></canvas>
        <div class="m-cover__lines-x"></div>
        <div class="m-cover__lines-y"></div>
        <div class="m-cover__info">
            <h6><?php echo esc_html( $snd_txt ); ?></h6>
            <h1 class="m-cover__info--title"><?php echo esc_html( $main_txt ); ?></h1>
            <?php
            if( $btn_selection ) {
                if( $btn ): ?>
                    <a href="<?php echo $btn_link; ?>" class="sh-btn m-btn">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/reservation_button.png" alt="">
                        <span><?php echo wp_kses_post(esc_html( $btn_txt )) ?></span>
                    </a>
                <?php endif; ?>
            <?php } ?>
        </div>
    </div>
<?php endif; ?>