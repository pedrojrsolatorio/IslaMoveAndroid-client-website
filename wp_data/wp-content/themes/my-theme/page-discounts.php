<?php
/*
Template Name: Discounts
*/
get_header();

$discount_title_plain = get_field('discount_title_plain');
$discount_title_highlight = get_field('discount_title_highlight');
$discount_title_suffix = get_field('discount_suffix');
$discount_register_link = get_field('discount_register_link');
$discount_image = get_field('discount_image')
?>

<main>
    <section class="wrapper bg-slate-50 pt-20 md:pt-24 pb-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="gap-6">
                <div class="inline-flex items-center gap-2 bg-blue-100 px-4 py-2 rounded-full mb-6">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check_icon_blue.png" alt="Check Icon">
                    <span class="inline-block text-primary text-sm font-bold">
                        Verified Savings
                    </span>
                </div>
                <h1 class="text-6xl font-black leading-tight mb-6">
                    <!-- Unlike the hero of Homepage, if for client who don't know how to use span in ACF field then use this code below and have separate ACF fields: -->
                    <?php if ($discount_title_plain): ?>
                        <?php echo esc_html($discount_title_plain); ?>
                    <?php endif; ?>

                    <?php if ($discount_title_highlight): ?>
                        <span class="text-primary"><?php echo esc_html($discount_title_highlight); ?></span>
                    <?php endif; ?>
                </h1>
                <p class="text-gray-600 text-xl mb-8 max-w-lg">
                    Verified students and seniors save 20% on every journey across the municipality. Simple registration, instant automatic fair reduction.
                </p>
                <div class="flex gap-4">
                    <a href="<?php echo esc_url($discount_register_link) ?>" class="bg-primary text-white font-bold rounded-full flex justify-center items-center w-40 h-14 overflow-hidden px-6 py-2 hover:-translate-y-1 transition duration-300 ease-in-out">
                        Register Now
                    </a>
                    <a href="<?php echo esc_url($discount_register_link) ?>" class="text-[#0F172A] font-bold rounded-full border border-[#E2E8F0] shadow-sm flex justify-center items-center w-40 h-14 overflow-hidden px-6 py-2 hover:-translate-y-1 transition duration-300 ease-in-out">
                        View Fares
                    </a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <?php if ($discount_image): ?>
                    <img
                        src="<?php echo esc_url($discount_image['url']) ?>"
                        alt="<?php echo esc_attr($discount_image['alt']) ?>"
                        class="rounded-3xl shadow-xl rotate-2">
                <?php endif ?>
                <div class="absolute bottom-4 left-4 md:-bottom-6 md:-left-6 z-10 bg-white shadow-lg rounded-xl px-4 md:px-6 py-2 md:py-4 flex items-center gap-2 md:gap-3">
                    <div class="bg-green-100 p-2 rounded-full">
                        <img
                            src="<?php echo get_template_directory_uri() ?>/assets/icons/check-icon-green.png"
                            alt="Check Icon">
                    </div>
                    <div>
                        <p class="text-[#64748B] font-bold text-xs capitalize">Latest Verification</p>
                        <p class="text-sm text-[#0F172A] font-bold">Student ID Approved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper pt-8 pb-16 flex flex-col items-center">
        <div class="mb-12">
            <h2 class="mb-4">Our Discount Programs</h2>
            <p class="text-[#475569]">Tailord support for our community's essential travelers.</p>
        </div>
        <div class="grid md:grid-cols-2 px-8 gap-8">
            <div class="lift-card">
                <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-3xl mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zm0 13L5.74 12.74 12 9.5l6.26 3.24L12 16zm-7 2v2c0 1.66 3.58 3 7 3s7-1.34 7-3v-2l-7 4-7-4z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Student Discount
                </h3>
                <p class="text-gray-500 leading-relaxed">
                    Currently enrolled students in the municipality receive and automatic 20% reduction on all standard fares. Valid for all routes.
                </p>
            </div>
            <div class="lift-card">
                <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-xl mb-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M14 7a3 3 0 1 0-6 0 3 3 0 0 0 6 0zm-1 4h-2a4 4 0 0 0-4 4v3h2v-3a2 2 0 0 1 2-2h2v8h2v-5h1l2 5h2l-2.5-6.5A3 3 0 0 0 14 11z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-3">
                    Senior Citizen Discount
                </h3>
                <p class="text-gray-500 leading-relaxed">
                    Municipal residents aged 60 and above are eligible for a permanent 20% discount. No manual entry needed &mdash;applied atomatically at checkout once verified.
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>