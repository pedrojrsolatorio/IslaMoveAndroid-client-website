<?php
$feat_title_1 = get_field('feature_title_1');
$feat_description_1 = get_field('feature_description_1');
$feat_title_2 = get_field('feature_title_2');
$feat_description_2 = get_field('feature_description_2');
?>

<section class="py-20 bg-white">
    <div class="container text-center">
        <h3 class="text-3xl font-bold mb-12"><?php echo esc_html($feat_title_1) ?></h3>

        <div class="grid md:grid-cols-2 gap-8">
            <div class="p-6 shadow rounded-xl">
                <h4 class="font-semibold text-xl mb-2"><?php  ?></h4>
                <p><?php echo esc_html($feat_description_1) ?></p>
            </div>

            <div class="p-6 shadow rounded-xl">
                <h4 class="font-semibold text-xl mb-2"><?php echo esc_html($feat_title_2) ?></h4>
                <p><?php echo esc_html($feat_description_2) ?></p>
            </div>
        </div>
    </div>
</section>