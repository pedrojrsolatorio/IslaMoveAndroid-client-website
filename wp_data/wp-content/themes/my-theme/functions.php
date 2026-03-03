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

new CatgoryHooks();
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