<?php

function jh_register_menus()
{
    register_nav_menu('header-menu',__('Header Menu'));
}

add_action('init', 'jh_register_menus');
