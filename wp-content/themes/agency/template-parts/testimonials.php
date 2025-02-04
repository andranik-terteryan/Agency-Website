<section class="lg:pt-[120px] lg:pb-[102px] py-10">
    <div class="container w-full mx-auto px-4">
        <h2 class="text-3xl sm:text-4xl md:text-5xl text-[#333333] font-bold text-left">
            <?= get_field('section_headline_ts', 'option') ?>
        </h2>
        <h4 class="font-normal text-base text-[#333333] mt-6 text-left">
            <?= get_field('section_description_ts', 'option') ?>
        </h4>

        <?php if (have_rows('testimonials_widgets','option')): ?>
            <div class="swiper testimonials mt-[48px]">
                <div class="swiper-wrapper">
                    <?php while (have_rows('testimonials_widgets','option')): the_row(); ?>
                        <div class="swiper-slide">
                            <div class="p-8 shadow-[0px_4px_8px_0px_rgba(0,0,0,0.1)]">
                                <div class="flex gap-1">
                                    <?php if (have_rows('starts')): ?>
                                        <?php while (have_rows('starts')): the_row();
                                            ?>
                                            <span>
                                                <img src="<?= get_sub_field('star') ?>" alt="">
                                            </span>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                                <p class="mt-6 text-sm text-[#494949] font-normal">
                                    <?= get_sub_field('widget_desc_ts') ?>
                                </p>
                                <div class="flex mt-6">
                                    <div class="w-14 h-14 rounded-full overflow-hidden relative mr-5">
                                        <img src="<?= get_sub_field('widget_icon_ts') ?>"
                                             class="absolute top-0 left-0 w-full h-full object-cover" alt="Icon">
                                    </div>
                                    <div>
                                        <h3 class="text-base font-semibold text-[#333333]"><?= get_sub_field('author_name_ts') ?></h3>
                                        <p class="text-[#494949] text-base font-normal"><?= get_sub_field('author_position_ts') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>