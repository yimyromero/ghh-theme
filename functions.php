<?php

function theme_assets() {

    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/dist/app.css',
        [],
        filemtime(get_template_directory() . '/dist/app.css')
    );
}

add_action('wp_enqueue_scripts', 'theme_assets');