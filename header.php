<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Don Chano's</title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <?php get_template_part('template-parts/modules/adornment-1') ?>

        <nav class="l-nav mx-1 display-desktop">
            <?php $contacto = get_page_by_path('contacto'); ?>
            <!--Repeater Field-->
            <?php if (have_rows('navbar_items', 'option')): ?>
                <?php while (have_rows('navbar_items', 'option')): the_row();
                    /* Post Objet*/
                    $nav_item = get_sub_field('navbar-item');
                ?>
                    <a class="m-nav-item" href="<?php echo get_permalink($nav_item->ID); ?>"><?php echo esc_html($nav_item->post_title); ?></a>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php
            $logo = get_field('logo', 'option');
            if (!empty($logo)): ?>
                <a class="m-nav-item m-nav-item--logo" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo" />
                </a>
            <?php endif; ?>

            <?php
            if (get_field('reservation_btn', 'option')) { ?>
                <a class="m-nav-item m-nav-item--btn m-btn" href="<?php echo get_permalink($contacto->ID); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/boton_icono.svg" alt="Reserva botón">
                    <span>Haz tu reserva</span>
                </a>
            <?php } ?>

            <?php
            if (get_field('share_btn', 'option')) { ?>
                <a href="" class="m-nav-item m-nav-item--share-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/shareIicon.svg" alt="Compartir botón">
                </a>
            <?php } ?>
        </nav>
        <nav class="l-tab-nav display-tablet display-none">
            <?php
            $restaurante = get_page_by_path('restaurante');
            $contacto = get_page_by_path('contacto');
            $experiencias = get_page_by_path('experiencias');
            $eventos = get_page_by_path('eventos');
            $menu = get_page_by_path('menu');
            ?>
            <a href="<?php echo get_home_url(); ?>" class="m-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/general/logo-Chanos.png" alt="Logo">
            </a>
            <div class="l-tab-nav__items">
                <a href="<?php echo get_permalink($restaurante->ID); ?>" class="m-tab-nav-item">Restaurante</a>
                <a href="<?php echo get_permalink($experiencias->ID); ?>" class="m-tab-nav-item">Experiencias</a>
                <a href="<?php echo get_permalink($eventos->ID); ?>" class="m-tab-nav-item">Eventos</a>
                <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-tab-nav-item">Contacto</a>
                <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-tab-nav-item m-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/boton_icono.svg" alt="Reserva botón">
                    <span>Haz tu reserva</span>
                </a>
                <a href="" class="m-tab-nav-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/shareIicon.svg" alt="Compartir botón">
                </a>
            </div>
        </nav>

        <nav class="l-tab-nav display-mobile">
            <?php
            $restaurante = get_page_by_path('restaurante');
            $contacto = get_page_by_path('contacto');
            $experiencias = get_page_by_path('experiencias');
            $eventos = get_page_by_path('eventos');
            $menu = get_page_by_path('menu');
            ?>
            <div class="l-nav-overlay">
                <a href="<?php echo get_home_url(); ?>" class="m-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/general/logo-Chanos.png" alt="Logo">
                </a>

                <span class="m-menu-btn">
                    Menu
                    <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 12C1 11.4477 1.44772 11 2 11H22C22.5523 11 23 11.4477 23 12C23 12.5523 22.5523 13 22 13H2C1.44772 13 1 12.5523 1 12Z" fill="#0F0F0F" />
                        <path d="M1 4C1 3.44772 1.44772 3 2 3H22C22.5523 3 23 3.44772 23 4C23 4.55228 22.5523 5 22 5H2C1.44772 5 1 4.55228 1 4Z" fill="#0F0F0F" />
                        <path d="M1 20C1 19.4477 1.44772 19 2 19H22C22.5523 19 23 19.4477 23 20C23 20.5523 22.5523 21 22 21H2C1.44772 21 1 20.5523 1 20Z" fill="#0F0F0F" />
                    </svg>
                </span>
            </div>

            <div class="l-tab-nav__items">
                <a href="<?php echo get_permalink($restaurante->ID); ?>" class="m-tab-nav-item">Restaurante</a>
                <a href="<?php echo get_permalink($experiencias->ID); ?>" class="m-tab-nav-item">Experiencias</a>
                <a href="<?php echo get_permalink($eventos->ID); ?>" class="m-tab-nav-item">Eventos</a>
                <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-tab-nav-item">Contacto</a>
                <a href="<?php echo get_permalink($contacto->ID); ?>" class="m-tab-nav-item m-btn">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/boton_icono.svg" alt="Reserva botón">
                    <span>Haz tu reserva</span>
                </a>
                <a href="" class="m-tab-nav-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/iconos/shareIicon.svg" alt="Compartir botón">
                </a>
            </div>
        </nav>
    </header>