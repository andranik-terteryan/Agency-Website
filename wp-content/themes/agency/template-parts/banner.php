<section>
    <div class="container w-full mx-auto px-4">
        <div class="shadow-[0px_10px_20px_0px_#A4D9FD26] bg-[#333333] py-[110px] px-2.5 w-full">
            <div class="flex flex-col sm:flex-row items-center justify-between max-w-[1087px] mx-auto w-full">
                <div class="max-w-[475px] w-full">
                    <h3 class="text-3xl sm:text-4xl md:text-[32px] font-semibold text-white">
                        <?= get_field('banner_headline_','option') ?>
                    </h3>
                    <p class="mt-6 text-white text-base sm:text-lg">
                        <?= get_field('banner_desc_','option') ?>
                    </p>
                </div>
                <button
                        class="p-3 ml-auto mt-6 sm:mt-0 max-w-[200px] w-full bg-[#0099FF] text-lg font-medium text-white rounded-sm transition-all duration-300 ease-in-out hover:bg-[#007acc] hover:scale-105">
                    <?= get_field('button_text_ban','option') ?>
                </button>
            </div>
        </div>
    </div>
</section>
