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
    <section class="wrapper bg-slate-50 pt-20 md:pt-26 lg:pt-32 min-h-[calc(100vh-76px)]">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="gap-6">
                <span class="inline-block bg-blue-100 text-primary text-sm px-4 py-2 rounded-full mb-6">
                    Verified Savings
                </span>
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
                            alt="Check Icon"
                            class="w-5 h-5 object-contain">
                    </div>
                    <div>
                        <p class="text-[#64748B] font-bold text-xs capitalize">Latest Verification</p>
                        <p class="text-sm text-[#0F172A] font-bold">Student ID Approved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>