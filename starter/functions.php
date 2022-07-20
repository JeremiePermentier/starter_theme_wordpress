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

    /**
     *  Panneau : Réglages de style
     *  Panel: Style Settings
     */
    $wp_customize->add_panel('section_style', array(
        'title' => __("Réglages de style"),
        'priority' => 10,
        'capability' => 'edit_theme_options'
    ));

    /**
     * Section :
     * Couleurs / colors
     * Polices / Font
     */
    $wp_customize->add_section('color', array(
        'title' => 'Couleur',
        'panel' => 'section_style'
    ));

    $wp_customize->add_section('font', array(
        'title' => 'Police',
        'panel' => 'section_style'
    ));

    /** 
     * Paramètre
     * Setting
     */
    $wp_customize->add_setting('color', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_setting('font', [
        'default' => 'lato',
    ]);

    /**
     * Contrôle
     * Control
     */
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'color', array(
        'section' => 'color',
        'setting' => 'color',
        'label' => 'Couleur principale',
        'priority' => 10,
    )));

    $wp_customize->add_control('font', [
        'section' => 'font',
        'setting' => 'font',
        'label' => 'Police',
        'type' => 'select',
        'choices' => array(
            'nunito' => 'Nunito',
            'lato' => 'Lato',
            'roboto' => 'Roboto',
        )
    ]);    

}
add_action('customize_register', 'theme_customizer_function');