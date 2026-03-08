<?php

namespace My_Theme;

class Setup
{
    public function __construct()
    {
        add_action('after_setup_theme', [$this, 'theme_setup']);
    }

    public function theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');

        // WordPress built-in logo support
        add_theme_support('custom-logo', [
            'height' => 100, //only suggestions, not display size
            'width' => 300,
            'flex-height' => true,
            'flex-width' => true
        ]);

        register_nav_menus([
            'main_menu' => __('Main Navigation', 'islamove')
        ]);
    }
}
