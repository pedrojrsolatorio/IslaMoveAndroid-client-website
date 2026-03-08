<?php
define('MY_THEME_DIR_URI', get_template_directory_uri());
define('MY_THEME_DIR', get_template_directory());

// Include composer autoloader
require_once MY_THEME_DIR . '/vendor/autoload.php';

// class IslaMove_Theme
// {
//     private static $instance = null;

//     private function __construct()
//     {
//         include MY_THEME_DIR . '/includes/categories.php';
//         include MY_THEME_DIR . '/includes/posts.php';

//         add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);
//     }

//     public static function get_instance()
//     {
//         if (null == self::$instance) {
//             self::$instance = new self;
//         }
//         return self::$instance;
//     }

//     public function enqueue_scripts()
//     {
//         wp_enqueue_style('theme-style', get_stylesheet_uri());
//         wp_enqueue_style('tailwind', MY_THEME_DIR_URI . '/assets/tailwind.css');
//     }
// }

// IslaMove_Theme::get_instance();

// Instantiate hook classes (from includes/)
require_once MY_THEME_DIR . '/includes/CategoryHooks.php';
require_once MY_THEME_DIR . '/includes/PostHooks.php';

new CategoryHooks();
new PostHooks();

// Instantiate PSR-4 utility classes (from src/)
use My_Theme\Setup;
use My_Theme\Enqueue;
use My_Theme\Categories;
use My_Theme\Posts;

// Instantiate classes that register hooks
new Setup();
new Enqueue();
new Categories();
new Posts();

// PSR-4 utility class for templates does not need instantiation if using static methods
// Example: Categories::current_category() can be called in templates

// Customizer Settings
function my_theme_customize_register($wp_customize)
{
    // Section
    $wp_customize->add_section('theme_settings', [
        'title' => 'Theme Settings',
        'priority' => 30
    ]);

    // Site Name
    $wp_customize->add_setting('site_name', [
        'sanitize_callback' => 'sanitize_text_field'
    ]);

    $wp_customize->add_control('site_name', [
        'label' => 'Site Name',
        'section' => 'theme_settings',
        'type' => 'text'
    ]);

    // Download Link
    $wp_customize->add_setting('download_link', [
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $wp_customize->add_control('download_link', [
        'label' => 'Download Link',
        'section' => 'theme_settings',
        'type' => 'url'
    ]);
}
add_action('customize_register', 'my_theme_customize_register');

// Optional: Preload self-hosted Inter fonts for faster rendering
function theme_preload_fonts()
{
    $fonts = [
        'Inter-Regular.woff2',
        'Inter-Medium.woff2',
        'Inter-SemiBold.woff2',
        'Inter-Bold.woff2'
    ];

    foreach ($fonts as $font) {
        echo '<link rel="preload" href="' . MY_THEME_DIR_URI . '/assets/fonts/' . $font . '" as="font" type="font/woff2" crossorigin>';
    }
}
add_action('wp_head', 'theme_preload_fonts');
