<footer class="bg-white pt-16 pb-8">
    <div class="wrapper text-center flex flex-col gap-16">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-12">
            <div class="flex flex-col gap-[22.8px]">
                <div class="flex items-center gap-2">
                    <div class="bg-primary w-8 h-8 rounded-full flex items-center justify-center overflow-hidden p-1.5">
                        <?php if (has_custom_logo()) : ?>
                            <div class="footer-logo">
                                <?php the_custom_logo() ?>
                            </div>
                        <?php endif ?>
                    </div>
                    <a href="<?php echo esc_url(home_url('/')) ?>" class="text-lg font-extrabold">
                        <?php echo esc_html($site_name ? $site_name : get_bloginfo('name')) ?>
                    </a>
                </div>
                <p class="text-left text-slate-500">The smarter way to move across San Jose Municipality. Safe, reliable, and affordable for everyone.</p>
                <div class="flex gap-4">
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#F1F5F9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 2a10 10 0 100 20 10 10 0 000-20zm0 0c2.5 2.5 4 6 4 10s-1.5 7.5-4 10m0-20C9.5 4.5 8 8 8 12s1.5 7.5 4 10M2 12h20" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#F1F5F9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 12v7a1 1 0 001 1h14a1 1 0 001-1v-7M16 6l-4-4m0 0L8 6m4-4v14" />
                        </svg>
                    </div>
                    <div class="flex items-center justify-center w-8 h-8 rounded-full bg-[#F1F5F9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 8a4 4 0 11-8 0 4 4 0 018 0zM12 14c-4 0-7 2-7 4v2h14v-2c0-2-3-4-7-4zm7-6v3a2 2 0 11-4 0V8a6 6 0 10-6 6" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-6 text-left">
                <h4 class="font-bold text-slate-900">App</h4>
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Download iOS</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Download Android</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">How it works</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Fare Estimator</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-6 text-left">
                <h4 class="font-bold text-slate-900">Community</h4>
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Safety Guidelines</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Student Program</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Seniors Portal</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Become a Driver</a>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-6 text-left">
                <h4 class="font-bold text-slate-900">Support</h4>
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Help Center</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Contact Us</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-slate-500 hover:text-slate-900 transition-colors">Terms of Service</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <hr class="border-gray-300">
            <p class="pt-8 text-slate-500">© <?php echo date('Y'); ?> IslaMove. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>