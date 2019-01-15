<?php
require __DIR__ . '/classes/HandmadesTale_Walker_Nav_Menu.php';

/**
 * Register our menus.
 */
function handmadestale_nav_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu'),
        )
    );
}
add_action('init', 'handmadestale_nav_menus');
