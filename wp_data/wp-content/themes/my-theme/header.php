<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans text-gray-800'); ?>>

    <?php
    $site_name = get_theme_mod('site_name');
    $download_link = get_theme_mod('download_link');
    ?>

    <header class="bg-white/90 shadow sticky top-0 z-10 backdrop-blur-md">
        <div class="wrapper py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-xl font-extrabold">
                    <?php echo esc_html($site_name ? $site_name : get_bloginfo('name')); ?>
                </a>
            </div>

            <!-- Navigation -->
            <nav>
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'menu_class' => 'flex gap-6 text-sm'
                ])
                ?>
            </nav>

            <!-- Download Button -->
            <?php if ($download_link) : ?>
                <a href="<?php echo esc_url($download_link); ?>" class="btn-download">Download App</a>
            <?php endif; ?>
        </div>
    </header>