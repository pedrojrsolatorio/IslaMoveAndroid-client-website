<?php
/*
Template Name: Safety
*/
get_header() ?>

<main>
    <section class="bg-white pt-20 md:pt-26 lg:pt-32 min-h-[calc(100vh-76px)]">
        <div class="gap-6">
            <span class="inline-block bg-blue-100 text-primary text-sm px-4 py-2 rounded-full mb-6">
                Now Live in San Jose Municipality
            </span>
            <h1 class="text-6xl font-black leading-tight mb-6">
                <?php echo wp_kses_post($hero_title); ?>
                <!-- If for client who don't know how to use span in ACF field then used this code below and have separate ACF fields: -->
                <!-- <?php if ($hero_title_plain): ?>
                    <?php echo esc_html($hero_title_plain); ?>
                <?php endif; ?>

                <?php if ($hero_title_highlight): ?>
                    <span class="text-primary"><?php echo esc_html($hero_title_highlight); ?></span>
                <?php endif; ?>

                <?php if ($hero_title_suffix): ?>
                    <?php echo esc_html($hero_title_suffix); ?>
                <?php endif; ?> -->
            </h1>
            <p class="text-gray-600 text-xl mb-8 max-w-lg">
                <?php echo esc_html($hero_subtitle) ?>
            </p>
            <div class="flex mb-8">
                <a href="<?php echo esc_url($hero_button_link) ?>" class="bg-black text-white rounded-full flex justify-center w-40 h-14 overflow-hidden px-6 py-2 hover:-translate-y-1 transition duration-300 ease-in-out">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/itch_io.png" alt="itch.io" class="max-w-full max-h-full object-contain">
                </a>
            </div>
            <div class="flex items-center mt-4">
                <!-- Avatar Stack -->
                <div class="flex -space-x-3">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/avatar_pic.jpg" alt="User 1" class="w-8 h-8 rounded-full border-2 border-white">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/avatar_pic2.jpg" alt="User 2" class="w-8 h-8 rounded-full border-2 border-white">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/avatar_pic3.jpg" alt="User 3" class="w-8 h-8 rounded-full border-2 border-white">
                </div>
                <p class="text-gray-500 text-sm ml-4">
                    Joined by <strong>100+ local residents</strong>
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>