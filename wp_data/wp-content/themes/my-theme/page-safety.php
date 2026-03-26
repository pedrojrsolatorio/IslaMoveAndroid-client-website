<?php
/*
Template Name: Safety
*/
get_header() ?>

<main>
    <section class="bg-slate-50 py-20">
        <div class="gap-6 wrapper flex flex-col items-center">
            <div class="bg-blue-100 flex items-center gap-2 px-4 py-2 rounded-full">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/safety.png" alt="safety icon" class="w-3 h-3.5">
                <span class="text-primary text-sm">
                    YOUR SAFETY IS OUR PRIORITY
                </span>
            </div>
            <h1 class="text-6xl font-black leading-tight mb-6 text-center">
                <?php echo wp_kses_post($hero_title); ?>
                Building a <span class="text-primary">Trusted</span> Community
            </h1>
            <p class="text-gray-600 text-xl mb-8 max-w-lg text-center">
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

    <section class="bg-white py-24">
        <div class="wrapper gap-16 flex flex-col items-center">
            <div class="flex gap-4 flex-col items-center">
                <h2>The Vefication Process</h2>
                <p>Strict document review for all members, completed in 24-48 hours.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="flex flex-col items-center">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/download.png" alt="download icon" class="self-center">
                    </div>
                    <h3 class="p-2">1. Documnent Submission</h3>
                    <p class="text-center">Upload Government ID, Driver's License, and current Vehicle Registration for review.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/download.png" alt="download icon" class="self-center">
                    </div>
                    <h3 class="p-2">2. Manual Admin Review</h3>
                    <p class="text-center">Upload Government ID, Our dedicated safety team manually inspects every document within 24-48 hours.</p>
                </div>
                <div class="flex flex-col items-center">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/download.png" alt="download icon" class="self-center">
                    </div>
                    <h3 class="p-2">3. Verified Status</h3>
                    <p class="text-center">Once approved, you receieve a 'Verified' badge, signaling trust to the community.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-slate-50">
        <div class="wrapper py-24 grid md:grid-cols-3 gap-8">
            <div class="lift-card">
                <div class="rounded-2xl bg-[#19BAF0]/10 flex items-center justify-center w-12 h-12 mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/search.png" alt="search icon">
                </div>
                <h3 class="mb-4">Passenger Vetting</h3>
                <p>It's not just for drivers. Every passenger must verify their identity, ensuring drivers feel safe with every booking.</p>
            </div>
            <div class="lift-card">
                <div class="rounded-2xl bg-[#19BAF0]/10 flex items-center justify-center w-12 h-12 mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/search.png" alt="search icon">
                </div>
                <h3 class="mb-4">Passenger Vetting</h3>
                <p>It's not just for drivers. Every passenger must verify their identity, ensuring drivers feel safe with every booking.</p>
            </div>
            <div class="lift-card">
                <div class="rounded-2xl bg-[#19BAF0]/10 flex items-center justify-center w-12 h-12 mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/search.png" alt="search icon">
                </div>
                <h3 class="mb-4">Passenger Vetting</h3>
                <p>It's not just for drivers. Every passenger must verify their identity, ensuring drivers feel safe with every booking.</p>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>