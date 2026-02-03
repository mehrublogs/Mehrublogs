<?php

declare(strict_types=1);

function trueman_school_enqueue_assets(): void {
    wp_enqueue_style(
        'trueman-school-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'trueman_school_enqueue_assets');
