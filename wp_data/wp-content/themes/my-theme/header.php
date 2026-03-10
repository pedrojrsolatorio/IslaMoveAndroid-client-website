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
        <div class="wrapper py-2 md:py-4 flex justify-between items-center">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php endif; ?>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="text-lg md:text-xl font-extrabold">
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
    </header>

    <!-- Mobile Menu Modal Overlay -->
    <div id="mobile-menu"
        class="fixed inset-0 z-50 flex flex-col hidden"
        role="dialog"
        aria-modal="true">
        <!-- Backdrop -->
        <div id="menu-backdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>

        <!-- Modal Panel -->
        <div class="relative z-10 bg-white w-4/5 max-w-xs min-h-full ml-auto flex flex-col shadow-2xl
                transition-transform duration-300 ease-in-out"
            id="menu-panel" style="transform: translateX(100%);">

            <!-- Modal Header -->
            <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
                <span class="text-lg font-extrabold text-gray-800">
                    <?php echo esc_html($site_name ? $site_name : get_bloginfo('name')); ?>
                </span>
                <button id="menu-close" class="w-8 h-8 flex items-center justify-center rounded-full hover:bg-gray-100 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Nav Links -->
            <nav class="flex-1 px-6 py-6">
                <?php
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col gap-1',
                    'link_before'    => '<span>',
                    'link_after'     => '</span>',
                ]);
                ?>
            </nav>

            <!-- Download Button at Bottom -->
            <?php if ($download_link) : ?>
                <div class="px-6 py-6 border-t border-gray-100">
                    <a href="<?php echo esc_url($download_link); ?>"
                        class="btn-download w-full text-center block">
                        Download App
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <style>
        /* Nav links inside modal */
        #mobile-menu nav ul li a {
            display: block;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            font-size: 0.95rem;
            font-weight: 500;
            color: #374151;
            transition: background 0.2s, color 0.2s;
        }

        #mobile-menu nav ul li a:hover {
            background: #f3f4f6;
            color: #111827;
        }

        #mobile-menu nav ul li.current-menu-item a {
            background: #eff6ff;
            color: #2563eb;
            font-weight: 600;
        }
    </style>

    <script>
        const toggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuPanel = document.getElementById('menu-panel');
        const menuClose = document.getElementById('menu-close');
        const backdrop = document.getElementById('menu-backdrop');

        function openMenu() {
            mobileMenu.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
            requestAnimationFrame(() => {
                menuPanel.style.transform = 'translateX(0)';
            });
            toggle.setAttribute('aria-expanded', 'true');
        }

        function closeMenu() {
            menuPanel.style.transform = 'translateX(100%)';
            document.body.style.overflow = '';
            toggle.setAttribute('aria-expanded', 'false');
            setTimeout(() => mobileMenu.classList.add('hidden'), 300);
        }

        toggle.addEventListener('click', openMenu);
        menuClose.addEventListener('click', closeMenu);
        backdrop.addEventListener('click', closeMenu);

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeMenu();
        });
    </script>