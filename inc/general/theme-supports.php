<?php

/**
 * Registers support for various WordPress features.
 */
function wyvern_child_setup() {

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 80,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
            'header-text' => array(
                'site-title',
                'site-description',
            ),
        )
    );
}
add_action( 'after_setup_theme', 'wyvern_child_setup', 11 );