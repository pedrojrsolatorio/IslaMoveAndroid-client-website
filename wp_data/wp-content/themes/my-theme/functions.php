<?php
define('MY_THEME_DIR_URI', get_template_directory_uri());
define('MY_THEME_DIR', get_template_directory());

// Include composer autoloader
require_once MY_THEME_DIR . '/vendor/autoload.php';

class IslaMove_Theme
{
    private static $instance = null;

    private function __construct()
    {
        include MY_THEME_DIR . '/includes/categories.php';
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
    }

    public static function get_instance()
    {
        if (null == self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function enqueue_scripts()
    {
        wp_enqueue_style('theme-style', get_stylesheet());
        wp_enqueue_style('tailwind', MY_THEME_DIR_URI . '/assets/tailwind.css');
    }
}

IslaMove_Theme::get_instance();
