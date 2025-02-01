<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> class="font-[Inter]">
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header class="py-4">
        <div class="container mx-auto px-4">
            <div class="lg:grid lg:grid-cols-[1fr_auto_1fr] lg:justify-between flex items-center">
                <!-- Logo Section -->
                <div class="lg:max-w-[168px] max-w-[120px] sm:ml-0">
                    <a href="<?= home_url() ?>" class="w-full h-full block">
                        <img src="<?= get_field('logo', 'option') ?>" alt="Logo">
                    </a>
                </div>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'container' => 'nav',
                        'container_class' => 'flex items-center lg:flex-row flex-col lg:w-auto w-full lg:flex menu-overlay',
                        'menu_class' => 'lg:flex lg:items-center menu ',
                    )
                );
                ?>

                <!-- Button -->
                <button class="lg:p-3 p-1 ml-auto lg:max-w-[200px] max-w-[120px] w-full bg-[#0099FF] lg:text-lg text-base font-medium text-white rounded-sm transition-all duration-300 ease-in-out hover:bg-[#007acc] hover:scale-105">
                    <?= get_field('button_text', 'option') ?>
                </button>

                <button id="toggle-button" class="lg:hidden p-2 bg-blue-500 text-white max-w-[40px] ml-2.5">
                    <span class="block w-6 h-0.5 bg-white"></span>
                    <span class="block mt-1 w-6 h-0.5 bg-white"></span>
                    <span class="block mt-1 w-6 h-0.5 bg-white"></span>
                </button>

            </div>
        </div>
    </header>
    <main>

