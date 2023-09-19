<?php

/**
 * Plugin Name:       words filter
 * Description:       A simple plugin for filtering words in WordPress
 * Version:           1.0.0
 * Author:            alireza10up
 * Author URI:        https://www.alireza10up.ir/
 * License:           MIT
 */

define('WF_DIR_PATH', plugin_dir_path(__FILE__));
define('WF_DIR_URL', plugin_dir_url(__FILE__));
define('WF_DIR_INC', WF_DIR_PATH . '/inc/');

# init

include WF_DIR_INC . 'init.php';