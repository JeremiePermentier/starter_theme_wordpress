<?php

/**
 * Active la prise en charge des images mises en avant sur les publications et les articles.
 * Enables support for featured images on posts and articles.
 */
add_theme_support('post-thumnails');

/**
 * Active la prise en charge des titres dynamiques.
 * Enables support for dynamic titles
 */
add_theme_support('title-tag');

/**
 * Activer la gestion des menus.
 * Enable menu management.
 */
register_nav_menus(
    array(
        'primary' => esc_html__('Menu principal', 'starter'),
        'secondary' => __('Menu secondaire', 'starter'),
    )
);

/**
 * Ajout de la prise en charge du logo personnalisé de base.
 *  * Add support for core custom logo.
 */
$logo_width = 300;
$logo_height = 150;

add_theme_support('custom-logo', 
array(
    'height'               => $logo_height,
    'width'                => $logo_width,
    'flex-width'           => true,
    'flex-height'          => true,
    'unlink-homepage-logo' => true,
));


function theme_customizer_function($wp_customize) {

    $wp_customize->add_section('starter', [
        'title' => 'Couleur',
        'priority' => 30,
    ]);
    $wp_customize->add_setting('color', [
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color', [
        'section' => 'starter',
        'setting' => 'color',
        'label' => 'Couleur principale'
    ]));
}
add_action('customize_register', 'theme_customizer_function');