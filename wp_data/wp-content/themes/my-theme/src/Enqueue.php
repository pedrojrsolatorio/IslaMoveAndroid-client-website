<?php

namespace My_Theme;

class Enqueue
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style(
            'theme-style',
            get_stylesheet_uri()
        );

        wp_enqueue_style(
            'tailwind',
            MY_THEME_DIR_URI . '/assets/tailwind.css'
        );
    }
}
