<?php
/*
Template Name: Safety
*/
get_header() ?>

<main class="">
    <section class="bg-slate-50 pt-20 md:pt-26 lg:pt-32 min-h-[calc(100vh-76px)]">
        <div class="gap-6 wrapper flex flex-col items-center">
            <div class="bg-blue-100 flex items-center gap-2 px-4 py-2 rounded-full">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/safety.png" alt="safety icon" class="w-3 h-3.5">
                <span class="text-primary text-sm">
                    YOUR SAFETY IS OUR PRIORITY
                </span>
            </div>
            <h1 class="text-6xl font-black leading-tight mb-6">
                <?php echo wp_kses_post($hero_title); ?>
                Building a <span class="text-primary">Trusted</span> Community
            </h1>
            <p class="text-gray-600 text-xl mb-8 max-w-lg">
                IslaMove is more than just a ride. We've built a rigorous verification system to ensure every driver and passenger is vetted for your peace of mind.
            </p>
            <div class="flex mb-8">
                <a href="<?php echo esc_url($hero_button_link) ?>" class="bg-primary rounded-full flex justify-center items-center h-14 gap-2 overflow-hidden px-6 py-2 hover:-translate-y-1 transition duration-300 ease-in-out">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/warning.png" alt="warning" class="w-4">
                    Report a Concern
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>