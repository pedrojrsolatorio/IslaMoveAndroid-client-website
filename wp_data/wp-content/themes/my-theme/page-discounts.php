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
        <div class="grid md:grid-cols-2 gap-24 md:gap-12 items-center">
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
                    Verified students and seniors save 20% on every journey across the municipality. Simple registration, instant automatic fair reduction. Sign up today and start enjoying smarter, more affordable transportation every day.
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

    <section class="wrapper py-32 md:py-16 flex flex-col items-center">
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

    <section class="py-24">
        <div class="wrapper gap-16 flex flex-col items-center">
            <div class="flex gap-4 flex-col items-center">
                <h2>How to Get Verified</h2>
                <p class="text-slate-600">Follow this 3 simple steps to unlock your discount.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-12 md:gap-8 relative w-full">
                <!-- <div class="absolute hidden md:block bg-[#E2E8F0] h-0.5 z-1"
                    style="top: 44px; left: calc(16.666% + 52px); right: calc(16.666% + 52px);">
                </div> -->

                <!-- Line segment: circle 1 → circle 2 -->
                <div class="absolute hidden md:block bg-[#E2E8F0] h-0.5 z-0"
                    style="top: 44px; left: calc(16.666% + 52px); right: calc(50% + 52px);">
                </div>

                <!-- Line segment: circle 2 → circle 3 -->
                <div class="absolute hidden md:block bg-[#E2E8F0] h-0.5 z-0"
                    style="top: 44px; left: calc(50% + 52px); right: calc(16.666% + 52px);">
                </div>

                <div class="absolute md:hidden left-1/2 -translate-x-1/2 z-0"
                    style="top: 88px; bottom: 88px; width: 2px;
                        background: repeating-linear-gradient(to bottom, #E2E8F0 0px, #E2E8F0 8px, transparent 8px, transparent 16px);">
                </div>
                <div class="flex flex-col items-center text-center z-10">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <span class="self-center text-white font-bold text-2xl">1</span>
                    </div>
                    <h3 class="p-2">Create Account</h3>
                    <p>Sign up with your email and basic personal details on the IslaMove app.</p>
                </div>
                <div class="flex flex-col items-center text-center z-2">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <span class="self-center text-white font-bold text-2xl">2</span>
                    </div>
                    <h3 class="p-2">Upload Valid ID</h3>
                    <p>Take a clear photo of your Student or Senior ID and upload it through our secure portal.</p>
                </div>
                <div class="flex flex-col items-center text-center z-2">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <span class="self-center text-white font-bold text-2xl">3</span>
                    </div>
                    <h3 class="p-2">Get Verified</h3>
                    <p>Our team reviews your submission. Once approved, discounts apply automatically</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper py-16">
        <div class="bg-white mx-auto w-208 grid md:grid-cols-2 gap-12 rounded-3xl p-12 shadow-sm">
            <div class="flex flex-col gap-6">
                <h3 class="font-bold">Document Requirements</h3>
                <p class="text-slate-600">To ensure a smooth verification process, please ensure your ID meets the criteria:</p>
                <div class="flex flex-col gap-4">
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            style="color: var(--color-primary)"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            width="16"
                            height="20">
                            <!-- Shield -->
                            <path d="M12 2L4 6v6c0 5 3.4 9.7 8 10 4.6-.3 8-5 8-10V6l-8-4z" />

                            <!-- Check -->
                            <path d="M9 12l2 2 4-4" />
                        </svg>
                        <div>
                            <p class="font-sm font-bold leading-tight">Valid Expiry Date</p>
                            <p class="text-xs text-slate-500">ID must be current and not expired.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            style="color: var(--color-primary)"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            width="16"
                            height="20">
                            <!-- camera body -->
                            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />

                            <!-- lens -->
                            <circle cx="12" cy="13" r="4" />
                        </svg>
                        <div>
                            <p class="font-sm font-bold leading-tight">Clear Photo</p>
                            <p class="text-xs text-slate-500">Text and your photo must be clearly visible.</p>
                        </div>
                    </div>
                    <div class="flex gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            style="color: var(--color-primary)"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            width="16"
                            height="20">
                            <!-- card body -->
                            <rect x="2" y="5" width="20" height="14" rx="2" />

                            <!-- stripe -->
                            <line x1="2" y1="10" x2="22" y2="10" />
                        </svg>
                        <div>
                            <p class="font-sm font-bold leading-tight">Official Issuer</p>
                            <p class="text-xs text-slate-500">Must be issued by a recognized institution.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-[#F1F5F9] rounded-2xl border-2 border-dashed border-gray-300 flex flex-col items-center justify-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/id-placeholder.png" alt="id placeholder">
                <p class="text-[#64748B] font-bold">ID Preview Placeholder</p>
                <p class="mt-2 text-xs text-[#94A3B8] w-72 text-center">Upload a .jpg, .png, or .pdf file.Maximum size: 5MB.</p>
            </div>
        </div>
    </section>

    <section class="py-24 flex flex-col gap-12 items-center">
        <h2 class="font-bold text-2xl">Frequently Asked Questions</h2>
        <div class="flex flex-col gap-4 w-full max-w-2xl">
            <div class="w-full bg-white border border-gray-200 rounded-3xl p-6 flex flex-col gap-4 faq-item">
                <div class="flex justify-between items-center cursor-pointer faq-header">
                    <p class="font-medium">How long does verification take?</p>
                    <span class="faq-arrow font-bold text-xl">&#8250;</span>
                </div>
                <p class="faq-answer hidden mt-2 text-gray-700">
                    Most verifications are processed within 24 hours. You will receive an email once your status is updated.
                </p>
            </div>
            <div class="w-full bg-white border border-gray-200 rounded-3xl p-6 flex flex-col gap-4 faq-item">
                <div class="flex justify-between items-center cursor-pointer faq-header">
                    <p class="font-medium">Do I need to re-verify every year?</p>
                    <span class="faq-arrow font-bold text-xl">&#8250;</span>
                </div>
                <p class="faq-answer hidden mt-2 text-gray-700">
                    Students must re-verify after the expiry date of their school ID. Senior citizen verification is permanent for the lifetime of the account.
                </p>
            </div>
            <div class="w-full bg-white border border-gray-200 rounded-3xl p-6 flex flex-col gap-4 faq-item">
                <div class="flex justify-between items-center cursor-pointer faq-header">
                    <p class="font-medium">Is my data secure?</p>
                    <span class="faq-arrow font-bold text-xl">&#8250;</span>
                </div>
                <p class="faq-answer hidden mt-2 text-gray-700">
                    Absolutely. Your ID data is encrypted and used solely for identity verification purposes. We do not share documents with third parties.
                </p>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqHeaders = document.querySelectorAll('.faq-header');

            faqHeaders.forEach(header => {
                header.addEventListener('click', function() {
                    const answer = this.nextElementSibling; // the <p> after the header
                    answer.classList.toggle('hidden'); // toggle visibility

                    const arrow = this.querySelector('.faq-arrow');
                    arrow.classList.toggle('rotate-90'); // optional: rotate arrow
                });
            });
        });
    </script>

    <style>
        .faq-arrow {
            transition: transform 0.3s ease;
            transform: rotate(90deg);
        }

        .rotate-90 {
            transform: rotate(-180deg);
        }
    </style>

    <section class="wrapper py-24">
        <div class="relative bg-primary rounded-[2.5rem] py-20 overflow-hidden shadow-sm">

            <!-- White curve -->
            <div class="absolute bottom-0 left-0 w-full h-[55%] bg-white rounded-[100%] translate-y-1/2 z-0"></div>

            <!-- Content -->
            <div class="relative z-10 flex flex-col gap-8 w-2xl mx-auto text-center items-center">
                <h2 class="font-black text-5xl">
                    <span class="text-white">Start Saving on Your</span>
                    <br>
                    <span class="text-black">Commute Today</span>
                </h2>
                <p class="text-white w-148">Join several students and seniors who travel smarter everyday. Registration takes less than 10 minutes.</p>
                <div class="flex gap-4 pt-4 mx-auto">
                    <div class="py-5.5 px-10 rounded-2xl shadow font-black text-primary bg-white cursor-pointer hover:-translate-y-1 transition duration-300 ease-in-out">Create My Account</div>
                    <div class="py-5.5 px-10 rounded-2xl shadow-sm font-bold bg-white cursor-pointer hover:-translate-y-1 transition duration-300 ease-in-out">Contact Support</div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>