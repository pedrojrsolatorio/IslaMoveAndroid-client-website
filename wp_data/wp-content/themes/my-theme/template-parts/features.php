<?php
$feat_title_1 = get_field('feature_title_1');
$feat_description_1 = get_field('feature_description_1');
$feat_title_2 = get_field('feature_title_2');
$feat_description_2 = get_field('feature_description_2');
$feat_title_3 = get_field('feature_title_3');
$feat_description_3 = get_field('feature_description_3');
?>

<section class="py-20 wrapper bg-slate-50">
    <div class="text-center mb-16">
        <span class="text-primary text-base font-semibold uppercase tracking-widest">Features</span>
        <h2 class="text-4xl font-black text-gray-900 mt-2">Designed for the Community</h2>
    </div>

    <!-- Feature Cards -->
    <div class="grid md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="lift-card">
            <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-3xl mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 9V7a5 5 0 00-10 0v2M3 9h18l-1.5 11H4.5L3 9z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">
                <?php echo esc_html($feat_title_1 ?: 'Fixed Municipal Fares') ?>
            </h3>
            <p class="text-gray-500 leading-relaxed">
                <?php echo esc_html($feat_description_1 ?: 'No surprises or hidden fees. See your exact fare before you book. We follow official municipal rates so you pay the same fair price every time.'); ?>
            </p>
        </div>

        <!-- Card 2 -->
        <div class="lift-card">
            <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-xl mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8zm6 0a3 3 0 100-6 3 3 0 000 6z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">
                <?php echo esc_html($feat_title_2 ?: 'Smart Ride-Sharing'); ?>
            </h3>
            <p class="text-gray-500 leading-relaxed">
                <?php echo esc_html($feat_description_2 ?: 'Our algorithm matches you with up to 5 passengers heading in your direction. Save money while reducing municipal traffic and carbon footprint.'); ?>
            </p>
        </div>

        <!-- Card 3 -->
        <div class="lift-card">
            <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-xl mb-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">
                <?php echo esc_html($feat_title_3 ?: 'Safety First'); ?>
            </h3>
            <p class="text-gray-500 leading-relaxed">
                <?php echo esc_html($feat_description_3 ?: 'Mandatory verification for all members. We review driver licenses and passenger IDs to ensure a respectful and secure environment for everyone.'); ?>
            </p>
        </div>
    </div>
</section>