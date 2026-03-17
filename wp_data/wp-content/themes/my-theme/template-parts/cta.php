<?php
$hero_button_link = get_field('hero_button_link');
?>

<section id="download" class="py-20 wrapper">
    <div class="bg-primary text-white text-center flex flex-col items-center md:w-240 py-16 px-8 rounded-3xl">
        <h2 class="text-5xl font-black mb-6">Ready to move smarter?</h2>
        <p class="mb-6 text-lg">Download IslaMove today and experience reliable, fixed-fare rides.</p>
        <a href="<?php echo esc_url($hero_button_link) ?>" class="group relative bg-black px-6 py-2 mt-4 font-semibold rounded-full w-32 h-14 overflow-hidden flex justify-center
        
        before:absolute before:top-0 before:-left-full
          before:w-full before:h-full
          before:bg-primary/40
          before:-skew-x-12
          before:transition-all before:duration-500
          
          hover:before:left-full
        
        ">
            <div class="flex items-center gap-2 transition-transform duration-300 group-hover:scale-105">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icons/itch_io_2.png" alt="itch.io" class="h-4">
                <span>Itch.io</span>
            </div>
        </a>
    </div>
</section>