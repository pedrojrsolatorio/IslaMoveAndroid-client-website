<?php
$hero_title = get_field('hero_title');
$hero_subtitle = get_field('hero_subtitle');
$hero_button_text = get_field('hero_button_text');
$hero_button_link = get_field('hero_button_link');
?>

<section class="bg-linear-to-r from-primary to-secondary text-white py-24">
    <div class="container text-center">
        <h2 class="text-5xl font-bold mb-6">
            <?php echo esc_html($hero_title); ?>
        </h2>
        <p class="text-xl mb-8">
            <?php echo esc_html($hero_subtitle) ?>
        </p>
        <?php if ($hero_button_link): ?>
            <a href="<?php echo esc_url($hero_button_link) ?>" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold">
                <?php echo esc_html($hero_button_text) ?>
            </a>
        <?php endif; ?>
    </div>
</section>