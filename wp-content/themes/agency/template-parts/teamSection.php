<section class="bg-[#0099FF0A] md:py-[120px] py-10 md:mt-[120px mt-10]">
    <div class="container mx-auto px-4">
        <h4 class="text-lg sm:text-xl font-semibold text-[#333333] text-center">
            <?= get_field('section_small_headline_tm', 'option') ?>
        </h4>
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-[#333333] mt-3 sm:mt-4 text-center">
            <?= get_field('section_headline_tm', 'option') ?>
        </h2>
        <p class="text-sm sm:text-base md:text-lg mt-6 sm:mt-8 font-normal text-[#494949] text-center max-w-[90%] sm:max-w-[612px] w-full mx-auto">
            <?= get_field('section_description_tm', 'option') ?>
        </p>
        <?php if (have_rows('team_members', 'options')): ?>
            <div class="swiper team lg:mt-[72px] mt-[35px]">
                <div class="swiper-wrapper">
                    <?php while (have_rows('team_members', 'options')): the_row();
                        ?>
                        <div class="swiper-slide">
                            <div class="pb-[65px] relative">
                                <div class="w-full h-[380px] overflow-hidden relative rounded-sm">
                                    <img src="<?= get_sub_field('widget_image_tm') ?>"
                                         class="absolute top-0 left-0 w-full h-full object-cover" alt="Icon">
                                </div>
                                <div
                                        class="absolute bottom-0 left-1/2 -translate-x-1/2 p-3.5 w-[calc(100%-48px)] bg-white eounded-sm z-[1]">
                                    <?php if (have_rows('social_media')): ?>
                                        <ul class="flex">
                                            <?php while (have_rows('social_media')): the_row(); ?>
                                                <li class="mr-3.5"><a href="<?= get_sub_field('social_media_link','option') ?>"><img
                                                                src="<?= get_sub_field('social_media_icon','option') ?>"
                                                                width="16"
                                                                height="16" alt="Icon"></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <h3 class="mt-4 text-2xl font-bold text-[#333333]"><?= get_sub_field('team_member_name','option') ?></h3>
                                    <p class="mt-2 font-normal text-lg text-[#494949]"><?= get_sub_field('team_member_position','option') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>


    </div>
</section>
