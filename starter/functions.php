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

function starter_customizer_function($wp_customize) {

    /**
     * Panels
     */
    $wp_customize->add_panel('section_color', array(
        'title' => __("Couleurs"),
        'priority' => 10,
        'capability' => 'edit_theme_options'
    ));

    $wp_customize->add_panel('section_font', array(
        'title' => __("Typographie"),
        'priority' => 11,
        'capability' => 'edit_theme_options'
    ));
    /**
     * Sections
     */

    # colors
    $wp_customize->add_section('preset', array(
        'title' => 'Pré-réglages',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('base', array(
        'title' => 'Base',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('title', array(
        'title' => 'Titre',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('button', array(
        'title' => 'Bouton',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('logo', array(
        'title' => 'Logo',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('navigation_bar', array(
        'title' => 'Barre de navigation',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('top_bar', array(
        'title' => 'Top bar',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('nav_mobile', array(
        'title' => 'Navigation mobile',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('post', array(
        'title' => 'Article',
        'panel' => 'section_color'
    ));

    $wp_customize->add_section('footer', array(
        'title' => 'Pied de page',
        'panel' => 'section_color'
    ));

    # Typo
    $wp_customize->add_section('font', array(
        'title' => 'Général',
        'panel' => 'section_font'
    ));

    $wp_customize->add_section('font_general', array(
        'title' => 'Titre',
        'panel' => 'section_font'
    ));

    $wp_customize->add_section('font_nav', array(
        'title' => 'Navigation',
        'panel' => 'section_font'
    ));

    $wp_customize->add_section('font_post', array(
        'title' => 'Article',
        'panel' => 'section_font'
    ));

    $wp_customize->add_section('section_home', array(
        'title' => __("Réglages de la mise en page d'accueil"),
        'priority' => 15
    ));

    /** 
     * Settings
     */

    # Colors

    $wp_customize->add_setting('preset', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('base', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('title', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('button', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('logo', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('navigation_bar', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('top_bar', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('nav_mobile', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('post', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    $wp_customize->add_setting('footer', array(
        'default' => "#000000",
        'sanitize_callback' => 'sanitize_hex_color'
    ));



    # Typo
    $wp_customize->add_setting('font', [
        'default' => 'lato',
    ]);

    $wp_customize->add_setting('font_general', [
        'default' => 'lato',
    ]);

    $wp_customize->add_setting('font_nav', [
        'default' => 'lato',
    ]);

    $wp_customize->add_setting('font_post', [
        'default' => 'lato',
    ]);

    $wp_customize->add_setting('title_banner', [
        'default' => 'Beautiful Title',
    ]);

    /**
     * Controls
     */

    # Colors

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'preset', array(
        'section' => 'preset',
        'setting' => 'preset',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'base', array(
        'section' => 'base',
        'setting' => 'base',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'title', array(
        'section' => 'title',
        'setting' => 'title',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'button', array(
        'section' => 'button',
        'setting' => 'button',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'logo', array(
        'section' => 'logo',
        'setting' => 'logo',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navigation_bar', array(
        'section' => 'navigation_bar',
        'setting' => 'navigation_bar',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'top_bar', array(
        'section' => 'top_bar',
        'setting' => 'top_bar',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nav_mobile', array(
        'section' => 'nav_mobile',
        'setting' => 'nav_mobile',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer', array(
        'section' => 'footer',
        'setting' => 'footer',
        'label' => 'Couleur par défaut',
        'priority' => 10,
    )));

    # Typo
    $font = array(
        'nunito' => 'Nunito',
        'lato' => 'Lato',
        'roboto' => 'Roboto',
    );

    $wp_customize->add_control('font', [
        'section' => 'font',
        'setting' => 'font',
        'label' => 'Police',
        'type' => 'select',
        'choices' => $font
    ]);   

    $wp_customize->add_control('font_nav', [
        'section' => 'font_nav',
        'setting' => 'font_nav',
        'label' => 'Police',
        'type' => 'select',
        'choices' => $font
    ]); 

    $wp_customize->add_control('font_general', [
        'section' => 'font_general',
        'setting' => 'font_general',
        'label' => 'Police',
        'type' => 'select',
        'choices' => $font
    ]); 
    
    $wp_customize->add_control('font_post', [
        'section' => 'font_post',
        'setting' => 'font_post',
        'label' => 'Police',
        'type' => 'select',
        'choices' => $font
    ]); 

    $wp_customize->add_control('title_banner', array(
        'section' => 'section_home',
        'setting' => 'title_banner',
        'label' => 'Titre de la bannière'
    ));
}
add_action('customize_register', 'starter_customizer_function');