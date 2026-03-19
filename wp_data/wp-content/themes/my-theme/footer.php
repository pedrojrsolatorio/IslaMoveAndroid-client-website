<footer class="bg-white pt-16 pb-8">
    <div class="wrapper text-center flex gap-16">
        <div class="grid md:grid-cols-4 gap-12">
            <div>
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
            </div>
        </div>
        <hr class="border-gray-300">
        <p>© <?php echo date('Y'); ?> IslaMove. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>