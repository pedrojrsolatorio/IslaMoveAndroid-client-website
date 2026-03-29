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
    <section class="bg-[#19BAF0]/5 py-24">
        <div class="wrapper grid md:grid-cols-2 gap-16">
            <div class="flex flex-col gap-6">
                <h2>Two-Way Accountability</h2>
                <p>Trust is a two-way street. Our mutual rating system ensures that respectful behavior is the standard for everyone in the IslaMove community.</p>
                <div class="flex gap-4">
                    <div class="bg-white shadow-md rounded-full flex items-center justify-center w-10 h-10">
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
                    <div class="bg-white shadow-md rounded-full flex items-center justify-center w-10 h-10">
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
                <button class="bg-secondary rounded-3xl py-3 text-white cursor-pointer transition-all duration-300 ease-in-out hover:-translate-y-1 hover:shadow-xl active:translate-y-0 active:shadow-md">Submit Rating</button>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>