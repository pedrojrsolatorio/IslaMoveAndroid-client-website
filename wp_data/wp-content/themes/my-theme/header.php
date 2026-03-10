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

    <header class="bg-white/90 shadow sticky top-0 z-20 backdrop-blur-md">
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

            <!-- Desktop Navigation -->
            <nav class="hidden md:block">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'menu_class' => 'flex gap-6 text-sm'
                ])
                ?>
            </nav>

            <div class="flex items-center gap-3">
                <!-- Download Button -->
                <?php if ($download_link) : ?>
                    <a href="<?php echo esc_url($download_link); ?>" class="btn-download">Download App</a>
                <?php endif; ?>

                <!-- Hamburger Button -->
                <button
                    id="menu-toggle"
                    class="md:hidden flex flex-col justify-center items-center w-8 h-8 gap-1.5 focus:outline-none"
                    aria-label="Toggle menu"
                    aria-expanded="false">
                    <span class="block w-6 h-0.5 bg-gray-800 transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-gray-800 transition-all duration-300"></span>
                    <span class="block w-6 h-0.5 bg-gray-800 transition-all duration-300"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div id="mobile-menu" class="hidden md:hidden border-t border-gray-100">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
                'container' => false,
                'menu_class' => 'flex flex-col text-sm px-4 py-3 gap-3'
            ])
            ?>
        </div>
    </header>

    <script>
        const toggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        toggle.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.toggle('hidden');

            toggle.setAttribute('aria-expanded', isOpen);

            // Animate hamburger to X
            const spans = toggle.querySelectorAll('span');
            if (isOpen) {
                spans[0].style.transform = 'translateY(8px) rotate(45deg)';
                spans[1].style.opacity = '0';
                spans[2].style.transform = 'translateY(-8px) rotate(-45deg)';
            } else {
                spans[0].style.transform = '';
                spans[1].style.opacity = '';
                spans[2].style.transform = '';
            }
        })
    </script>