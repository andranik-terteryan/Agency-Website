<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agency
 */

?>
</main>
<footer class="lg:pt-[94px] lg:pb-[80px] py-10 bg-[#0099FF0A]">
    <div class="container mx-auto px-4">
        <div class="flex flex-col lg:flex-row justify-between">
            <div class="flex flex-col max-w-[307px] mb-8 lg:mb-0">
                <div class="max-w-[168px]">
                    <a href="#" class="w-full h-full block">
                        <img src="<?= get_field('footer_logo','option') ?>" alt="Logo">
                    </a>
                </div>
                <p class="mt-8 text-base sm:text-lg font-normal text-[#494949]">
                    <?= get_field('left_side_text','option') ?>
                </p>
                <?php if (have_rows('social_media_ft','option')): ?>
                    <ul class="flex mt-8">
                        <?php while (have_rows('social_media_ft','option')): the_row(); ?>
                            <li class="mr-3.5 ">
                                <a href="<?= get_sub_field('social_media_link_ft','option') ?>" >
                                    <img src="<?= get_sub_field('social_media_icon_ft','option') ?>" width="25" height="25" alt="Icon">
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="mb-8 md:mb-0">
                <h4 class="text-lg sm:text-xl font-semibold text-[#000000]"><?= get_field('first_menu_headline','option') ?></h4>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-1',
                        'container' => 'div',
                        'menu_class' => 'footer-menu text-base sm:text-lg'
                    )
                );
                ?>
            </div>
            <div class="mb-8 md:mb-0">
                <h4 class="text-lg sm:text-xl font-semibold text-[#000000]"><?= get_field('second_menu_headline','option') ?></h4>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-2',
                        'container' => 'div',
                        'menu_class' => 'footer-menu text-base sm:text-lg'
                    )
                );
                ?>
            </div>
            <div class="flex flex-col max-w-[307px]">
                <h4 class="text-lg sm:text-xl font-semibold text-[#000000]"><?= get_field('right_text_headline','option') ?></h4>
                <p class="mt-8 text-base sm:text-lg font-normal text-[#494949]">
                    <?= get_field('right_text_desc','option') ?>
                </p>
                <div class="mt-8">
                    <form action="#">
                        <input type="email" placeholder="Enter your email"
                               class="w-full bg-[#333333] rounded-sm py-3 px-6 text-lg font-normal text-[#999999]">
                        <button
                                type="submit"
                                class="p-3 mt-6 ml-auto max-w-[200px] w-full bg-[#0099FF] text-lg font-medium text-white rounded-sm transition-all duration-300 ease-in-out hover:bg-[#007acc] hover:scale-105">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
