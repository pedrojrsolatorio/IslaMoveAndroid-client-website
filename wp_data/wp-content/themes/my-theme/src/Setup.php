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

        register_nav_menus([
            'primary' => __('Primary Menu', 'islamove')
        ]);
    }
}
