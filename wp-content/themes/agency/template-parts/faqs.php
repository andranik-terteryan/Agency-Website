<section class="lg:py-[120px] py-12 bg-[#F2FAFF]">
    <div class="max-w-[956px] w-full mx-auto px-4">
        <h4 class="font-semibold text-[#333333] text-xl sm:text-2xl text-center">
            <?= get_field('section_small_headline_faq', 'option') ?>
        </h4>
        <h2 class="text-3xl sm:text-4xl md:text-5xl text-[#333333] mt-4 font-bold text-center">
            <?= get_field('section_headline_faq', 'option') ?>
        </h2>

        <?php if (have_rows('faqs', 'option')): ?>
            <div class="w-full lg:pt-14 pt-0">
                <?php
                $index = 1;
                while (have_rows('faqs', 'option')): the_row();
                    $accordion_id = 'accordion-' . $index;
                    ?>
                    <div class="rounded-sm bg-white shadow-[0px_4px_8px_0px_rgba(0,0,0,0.1)] mt-6">
                        <input type="radio" id="<?= $accordion_id ?>" name="accordion" class="peer hidden">
                        <label for="<?= $accordion_id ?>"
                               class="flex justify-between items-center p-8 bg-white text-[#333333] text-lg font-medium cursor-pointer">
                            <?= get_sub_field('item_headline') ?>
                            <span class="transition-transform duration-300 transform peer-checked:rotate-180">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.0001 7.7002L12.0001 13.7002L18.0001 7.7002L20.4001 8.9002L12.0001 17.3002L3.6001 8.9002L6.0001 7.7002Z"
                                  fill="#333333"/>
                        </svg>
                    </span>
                        </label>
                        <div class="max-h-0 overflow-hidden peer-checked:max-h-40 transition-all duration-300 peer-checked:pb-[69px] px-8 pt-0 text-[#494949] text-base">
                            <?= get_sub_field('item_description') ?>
                        </div>
                    </div>
                    <?php
                    $index++;
                endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>