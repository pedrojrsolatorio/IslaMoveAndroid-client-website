<?php
/*
Template Name: Discounts
*/
get_header() ?>

<main>
    <section class="wrapper bg-slate-50 pt-20 md:pt-26 lg:pt-32 min-h-[calc(100vh-76px)]">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="gap-6">
                <span class="inline-block bg-blue-100 text-primary text-sm px-4 py-2 rounded-full mb-6">
                    Verified Savings
                </span>
                <h1 class="text-6xl font-black leading-tight mb-6">
                    Commute Smarter with
                    <span class="text-primary">Exclusive Discounts</span>
                </h1>
                <p class="text-gray-600 text-xl mb-8 max-w-lg">
                    Verified students and seniors save 20% on every journey across the municipality. Simple registration, instant automatic fair reduction.
                </p>
                <div class="flex mb-8">
                    <a href="<?php echo esc_url($hero_button_link) ?>" class="bg-primary text-white rounded-full flex justify-center items-center w-40 h-14 overflow-hidden px-6 py-2 hover:-translate-y-1 transition duration-300 ease-in-out">
                        Register Now
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <?php if ($hero_image): ?>
                    <img
                        src="<?php echo esc_url($hero_image['url']) ?>"
                        alt="<?php echo esc_attr($hero_image['alt']) ?>"
                        class="rounded-3xl shadow-xl">
                <?php endif ?>
                <div class="absolute bottom-4 left-4 md:-bottom-6 md:-left-6 z-10 bg-white shadow-lg rounded-xl px-4 md:px-6 py-2 md:py-4 flex items-center gap-2 md:gap-3">
                    <div class="bg-green-100 p-2 rounded-full">
                        <img
                            src="<?php echo get_template_directory_uri() ?>/assets/icons/check_icon.png"
                            alt="Check Icon"
                            class="w-5 h-5 object-contain">
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">Fixed Fare Secured</p>
                        <p class="text-sm text-gray-500">Price locked for 15 mins</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>