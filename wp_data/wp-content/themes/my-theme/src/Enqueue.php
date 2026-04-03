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
        // Only load Elementor on pages that actually use it
        if (!$this->is_elementor_page()) {
            add_action('wp_enqueue_scripts', function () {
                wp_dequeue_style('elementor-frontend');
                wp_dequeue_style('elementor-icons');
                wp_dequeue_script('elementor-frontend');
                wp_dequeue_script('elementor-webpack-runtime');
            }, 100);
        }

        wp_enqueue_style(
            'theme-style',
            get_stylesheet_uri()
        );

        wp_enqueue_style(
            'tailwind',
            MY_THEME_DIR_URI . '/assets/tailwind.css',
            [],
            '1.0'
        );
    }

    private function is_elementor_page(): bool
    {
        // Check if current post/page was built with Elementor
        if (is_singular()) {
            $post_id = get_queried_object_id();
            return get_post_meta($post_id, '_elementor_edit_mode', true) === 'builder';
        }
        return false;
    }
}
