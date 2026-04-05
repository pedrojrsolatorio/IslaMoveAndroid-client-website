<?php
/*
Template Name: Safety
*/
get_header() ?>

<main>
    <section class="bg-white flex items-center min-h-[calc(100vh-76px)]">
        <div class="wrapper w-full">
            <div class="bg-slate-900 rounded-3xl my-20 md:my-0 p-24 gap-6 flex flex-col items-center">
                <div class="bg-blue-100 flex items-center gap-2 px-4 py-2 rounded-full">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/safety.png" alt="safety icon" class="w-3 h-3.5">
                    <span class="text-primary text-sm">
                        YOUR SAFETY IS OUR PRIORITY
                    </span>
                </div>
                <h1 class="text-6xl font-black leading-tight mb-6 text-center text-white">
                    <?php echo wp_kses_post($hero_title); ?>
                    Building a <span class="text-primary">Trusted</span> Community
                </h1>
                <div class="flex flex-col md:flex-row justify-evenly w-full">
                    <div>
                        <p class="text-gray-600 text-xl mb-8 max-w-lg">
                            IslaMove is more than just a ride. We've built a rigorous verification system to ensure every driver and passenger is vetted for your peace of mind.
                        </p>
                        <div class="flex mb-8">
                            <a href="<?php echo esc_url($hero_button_link) ?>" class="bg-primary rounded-full flex justify-center items-center h-14 gap-2 overflow-hidden px-6 py-2 hover:-translate-y-1 transition duration-300 ease-in-out hover:bg-white hover:text-[#0f172b]">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/warning.png" alt="warning" class="w-4">
                                Report a Concern
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <div class="bg-[#19BAF0]/20 rounded-full h-64 w-64 flex justify-center items-center">
                            <div class="bg-[#19BAF0]/40 rounded-full h-48 w-48 flex justify-center items-center">
                                <div class="bg-[#19BAF0] rounded-full h-32 w-32 flex items-center justify-center">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check-icon-white.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white pt-20 pb-24">
        <div class="wrapper gap-16 flex flex-col items-center">
            <div class="flex gap-4 flex-col items-center">
                <h2>The Vefication Process</h2>
                <p class="text-slate-600">Strict document review for all members, completed in 24-48 hours.</p>
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
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/download.png" alt="download icon" class="self-center">
                    </div>
                    <h3 class="p-2 text-center">1. Documnent Submission</h3>
                    <p>Upload Government ID, Driver's License, and current Vehicle Registration for review.</p>
                </div>
                <div class="flex flex-col items-center text-center z-2">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/sheild.png" alt="download icon" class="self-center">
                    </div>
                    <h3 class="p-2 text-center">2. Manual Admin Review</h3>
                    <p>Upload Government ID, Our dedicated safety team manually inspects every document within 24-48 hours.</p>
                </div>
                <div class="flex flex-col items-center text-center z-2">
                    <div class="mb-6 bg-primary rounded-full w-22 h-22 flex justify-center">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check-icon-dark.png" alt="download icon" class="self-center">
                    </div>
                    <h3 class="p-2 text-center">3. Verified Status</h3>
                    <p>Once approved, you receieve a 'Verified' badge, signaling trust to the community.</p>
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
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/car.png" alt="search icon">
                </div>
                <h3 class="mb-4">Vehicle Standards</h3>
                <p>We require periodic vehicle health checks and photo verification to ensure comfort and mechanical reliability.</p>
            </div>
            <div class="lift-card">
                <div class="rounded-2xl bg-[#19BAF0]/10 flex items-center justify-center w-12 h-12 mb-4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icons/star.png" alt="search icon">
                </div>
                <h3 class="mb-4">Mutual Accountability</h3>
                <p>Both parties rate each other after every trip. High ratings are rewarded, while low ratings trigger quality reviews.</p>
            </div>
        </div>
    </section>
    <section class="bg-[#19BAF0]/5 py-24">
        <div class="wrapper grid md:grid-cols-2 gap-16">
            <div class="flex flex-col gap-6">
                <h2>Two-Way Accountability</h2>
                <p>Trust is a two-way street. Our mutual rating system ensures that respectful behavior is the standard for everyone in the IslaMove community.</p>
                <div class="flex gap-4">
                    <div class="bg-white shadow-md rounded-full flex items-center justify-center w-10 h-10 shrink-0">
                        <svg class="w-5 h-4.75 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                        </svg>
                    </div>
                    <div>
                        <h4>Transparent Feedback</h4>
                        <p>Read reviews from previous trips to know exactly who you are moving with.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="bg-white shadow-md rounded-full flex items-center justify-center w-10 h-10 shrink-0">
                        <svg class="w-5 h-4.5 text-primary" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10A8 8 0 114.293 4.293A8 8 0 0118 10zm-8-4a1 1 0 00-1 1v4a1 1 0 002 0V7a1 1 0 00-1-1zm0 8a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div>
                        <h4>Instant Quality Alerts</h4>
                        <p>Any rating below 3 stars automatically flags the trip for our safety team's review.</p>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-sm rounded-3xl p-8 flex flex-col gap-8">
                <div class="pb-6 flex justify-between">
                    <div class="flex items-center gap-4">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icons/avatar_pic.jpg" alt="rating avatar" class="rounded-full ml-4 h-12 w-12">
                        <div class="flex flex-col">
                            <p class="font-bold">Driver: Marc R.</p>
                            <div class="flex">
                                <svg class="w-[11.67px] h-[11.08px] text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                                </svg>
                                <svg class="[11.67px] h-[11.08px] text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                                </svg>
                                <svg class="[11.67px] h-[11.08px] text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                                </svg>
                                <svg class="[11.67px] h-[11.08px] text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                                </svg>
                                <svg class="[11.67px] h-[11.08px] text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="bg-green-50 h-6 px-2 rounded-2xl flex items-center text-green-700 text-xs font-bold">VERIFIED</div>
                </div>
                <div class="flex flex-col items-center gap-4 py-4">
                    <p class="text-sm font-medium uppercase">Rate Your Trip</p>
                    <div class="flex gap-4">
                        <svg class="[30px] h-[28.5px] text-primary" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="miter" stroke-linecap="butt" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                        </svg>
                        <svg class="[30px] h-[28.5px] text-primary" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="miter" stroke-linecap="butt" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                        </svg>
                        <svg class="[30px] h-[28.5px] text-primary" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="miter" stroke-linecap="butt" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                        </svg>
                        <svg class="[30px] h-[28.5px] text-primary" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="miter" stroke-linecap="butt" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                        </svg>
                        <svg class="[30px] h-[28.5px] text-[#E2E8F0]" fill="none" stroke="currentColor" stroke-width="2" stroke-linejoin="miter" stroke-linecap="butt" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.367 2.447a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.367-2.447a1 1 0 00-1.176 0l-3.367 2.447c-.784.57-1.838-.197-1.539-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.274-3.957z" />
                        </svg>
                    </div>
                    <p class="text-sm text-[#94A3B8]">"Professional driver, very clean car!"</p>
                </div>
                <button class="bg-secondary rounded-3xl py-3 text-white">Submit Rating</button>
            </div>
        </div>
    </section>

    <section class="wrapper flex flex-col py-24 gap-6 max-w-4xl mx-auto items-center text-center">
        <h2>Our Community-First Approach</h2>
        <p>IslaMove is built on respect, inclusivity, and safety. We remain a zero-tolerance policy for harasement or discrimination of any kind.</p>
        <div class="grid grid-cols-2 grid-rows-2 gap-x-4 gap-y-5">
            <div class="flex gap-3 p-4 item-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check.png" alt="check icon" class="h-5">
                <p>Respect personal space and boundaries</p>
            </div>
            <div class="flex gap-3 p-4 item-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check.png" alt="check icon" class="h-5">
                <p>Report suspicious activity immediately</p>
            </div>
            <div class="flex gap-3 p-4 item-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check.png" alt="check icon" class="h-5">
                <p>Communicate clearly through the app</p>
            </div>
            <div class="flex gap-3 p-4 item-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/check.png" alt="check icon" class="h-5">
                <p>Follow local traffic laws and safety rules</p>
            </div>
        </div>
    </section>

    <section class="bg-slate-900">
        <div class="wrapper py-12 flex flex-col md:flex-row md:justify-between gap-6 items-center">
            <div class="flex flex-col justify-center">
                <h2 class="mb-2 text-white text-2xl font-bold">Need assistance or clarifications?</h2>
                <p class="text-white">Our safety response team is always ready to help.</p>
            </div>
            <div class="flex gap-4">
                <div class="bg-white px-6 py-3.25 rounded-3xl flex gap-2 items-center cursor-pointer transition-all duration-300 ease-in-out hover:bg-primary hover:text-white hover:-translate-y-1 hover:shadow-xl active:translate-y-0 active:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="w-5 h-5">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 5a2 2 0 012-2h2.28a1 1 0 01.95.68l1.2 3.6a1 1 0 01-.27 1.05L8.09 9.91a16 16 0 006 6l1.58-1.07a1 1 0 011.05-.27l3.6 1.2a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.16 21 3 14.84 3 7V5z" />
                    </svg>
                    <span>Contact Support</span>
                </div>
                <div class="rounded-3xl border-2 border-white text-white py-3 px-6 flex gap-2 items-center cursor-pointer transition-all duration-300 ease-in-out hover:border-primary hover:text-primary hover:-translate-y-1 hover:shadow-xl active:translate-y-0 active:shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-6 h-6"
                        fill="currentColor"
                        viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.02 2 11c0 2.84 1.51 5.38 3.87 7.05V22l3.55-1.94c.81.22 1.68.34 2.58.34 5.52 0 10-4.02 10-9s-4.48-9-10-9zm1.06 12.15l-2.55-2.72-4.47 2.72 5.02-5.32 2.61 2.72 4.41-2.72-5.02 5.32z" />
                    </svg>
                    <p>Facebook</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>