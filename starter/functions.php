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
