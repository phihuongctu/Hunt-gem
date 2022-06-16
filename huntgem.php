<?php
/*
Plugin Name: HuntGem
Version: 1.0
Description: HuntGem
Author: Phi Huong
*/

if (!defined('ABSPATH'))
    exit;

if (!class_exists('HUNTGEM')) {
    class HUNTGEM
    {
        function __construct()
        {
            if (!defined('HUNTGEM_URL')) {
                define("HOME_URL",  home_url());
                define("HUNTGEM_URI", plugin_dir_path(__FILE__));
                define("HUNTGEM_URL", plugin_dir_url(__FILE__));
                define("HUNTGEM_ASSETS", HUNTGEM_URL . 'assets');
            }
            //  * @Snippet Add Main Process Function
            //  * @Author Thien Thuc Tap
            require_once(HUNTGEM_URI . 'functions.php');
        }
    }
}

function HUNTGEM_load()
{
    global $HUNTGEM;
    $HUNTGEM = new HUNTGEM();
}
add_action('plugins_loaded', 'HUNTGEM_load');