<?php
/**
 * Template Name: Home
 */
get_header()
?>

<section class="pt-12">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between">
            <div class="max-w-full md:max-w-[632px] md:pt-[50px] w-full xl:pt-[168px] ">
                <h1 class="text-4xl lg:text-6xl font-bold text-[#333333] leading-tight lg:leading-[70px]">
                    <?= get_field('section_headline') ?>
                </h1>
                <p class="text-base md:text-lg md:mt-8 mt-4 text-[#333333] font-normal">
                    <?= get_field('section_description') ?>
                </p>
                <div class="flex flex-col md:flex-row items-center mt-10 space-y-4 md:space-y-0 md:space-x-4">
                    <button
                            class="p-3 max-w-[200px] w-full bg-[#0099FF] text-lg font-medium text-white rounded-sm transition-all duration-300 ease-in-out hover:bg-[#007acc] hover:scale-105">
                        <?= get_field('first_button_text') ?>
                    </button>
                    <button
                            class="p-3 max-w-[200px] w-full bg-[#ffffff] border border-[#0099FF] text-lg font-medium text-[#0099FF] rounded-sm transition-all duration-300 ease-in-out hover:bg-[#f5f5f5] hover:scale-105">
                        <?= get_field('second_button_text') ?>
                    </button>
                </div>
            </div>
            <div class="max-w-full md:max-w-[711px] mt-8 md:mt-0">
                <img src="<?= get_field('section_image') ?>" alt="Hero Image" class="w-full h-auto">
            </div>
        </div>
    </div>
</section>

<section class="bg-[#0099FF0A] md:py-[120px] py-10 md:mt-[100px] mt-10">
    <div class="container mx-auto px-4">
        <h4 class="text-lg sm:text-xl font-semibold text-[#333333] text-center">
            <?= get_field('section_small_headline_sr') ?>
        </h4>
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-[#333333] mt-3 sm:mt-5 font-bold text-center">
            <?= get_field('section_headline_sr') ?>
        </h2>
        <p class="text-base text-[#494949] text-center mt-6 sm:mt-8 max-w-[90%] sm:max-w-[612px] w-full mx-auto">
            <?= get_field('section_description_sr') ?>
        </p>


        <?php if (have_rows('services_widgets')): ?>
            <div class="flex flex-wrap gap-4 lg:mt-[72px] mt-[35px] justify-center">
                <?php while (have_rows('services_widgets')): the_row(); ?>
                    <div
                            class="bg-white w-full sm:w-[calc(50%-16px)] lg:w-[calc(25%-16px)] py-[58px] px-[27px] rounded-sm flex flex-col items-center">
                        <div class="w-[100px] h-[100px] rounded-full overflow-hidden relative">
                            <img src="<?= get_sub_field('widget_icon') ?>"
                                 class="absolute top-0 left-0 w-full h-full object-cover" alt="Icon">
                        </div>
                        <h3 class="text-[32px] leading-[42px] font-bold text-[#333333]">
                            <?= get_sub_field('widget_title') ?>
                        </h3>
                        <p class="mt-6 text-sm font-normal text-[#494949] text-center">
                            <?= get_sub_field('widget_description') ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="md:py-20 py-10">
    <div class="container mx-auto px-4">
        <div class="flex flex-col-reverse md:flex-row justify-between">
            <div class="max-w-[686px] w-full mb-10 md:mb-0">
                <img src="<?= get_field('section_image_us') ?>" alt="Hero Image" class="w-full">
            </div>

            <div class="max-w-[632px] w-full pt-[15px] sm:pt-[25px] lg:pt-[60px] xl:pt-[135px]">
                <h3 class="text-lg sm:text-xl font-semibold text-[#333333]">
                    <?= get_field('section_small_headline_us') ?>
                </h3>
                <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#333333] mt-3 sm:mt-4">
                    <?= get_field('section_headline_us') ?>
                </h2>
                <p class="text-sm sm:text-base mt-4 sm:mt-6 text-[#333333] font-normal">
                    <?= get_field('section_description_us') ?>
                </p>
                <button
                        class="mt-6 sm:mt-10 p-2 sm:p-3 mr-0 sm:mr-4 max-w-[180px] sm:max-w-[200px] w-full bg-[#0099FF] text-base sm:text-lg font-medium text-white rounded-sm transition-all duration-300 ease-in-out hover:bg-[#007acc] hover:scale-105">
                    <?= get_field('button_text_us') ?>
                </button>
            </div>

        </div>
    </div>
</section>

<?php get_template_part('template-parts/teamSection', 'none'); ?>

<section class="md:py-[120px] py-10">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-[#333333] mt-3 sm:mt-4 font-bold text-left">
            More Projects
        </h2>
        <div class="swiper projects md:mt-[80px] mt-[35px]">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        ?>
                        <div class="swiper-slide p-[1px]">
                            <div class="p-5 bg-white shadow-[0px_4px_8px_0px_rgba(0,0,0,0.1)] rounded-sm">
                                <div class="w-full relative min-h-[376px]">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"
                                             class="absolute top-0 left-0 w-full h-full object-cover">
                                    <?php endif; ?>
                                </div>
                                <h3 class="text-xl sm:text-2xl md:text-[32px]/[42px] font-bold text-[#000000] mt-4 sm:mt-[25px]">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="mt-3 sm:mt-5 text-xs sm:text-sm text-[#494949]">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>"
                                   class="font-semibold text-base sm:text-lg text-[#333333] mt-6 sm:mt-8 inline-block relative after:absolute after:bottom-0 pb-3 after:h-[2px] after:w-full after:bg-[#0099FF] after:left-0">
                                    <?= get_field('permalink_button_text', get_the_ID()) ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/global/arrow.svg"
                                         class="inline-block w-4 h-5" alt="Icon">
                                </a>

                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center text-gray-500">No posts found</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/faqs', 'none'); ?>

<?php get_template_part('template-parts/testimonials', 'none'); ?>

<?php get_template_part('template-parts/banner', 'none'); ?>

<?php get_footer() ?>


