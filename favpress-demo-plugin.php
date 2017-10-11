<?php
/*
	Plugin Name: FavPress Demo Plugin
	Plugin URI: http://www.favpress.com
	Description: This plugins shows what you can do with FavPress
	Version: 1.1.0
	Author: MOEWE GbR - Adrian M&ouml;rchen, Markus Weigelt
	Author URI: http://www.moewe.io
	License: GPLv3
*/

@include "load-demo.php";

define('FAVPRESS_DEMO_BASE_PATH', dirname(__FILE__));

/**
 * Require FavPress as dependency
 *
 * @see http://favpress.com/docs/10_getting-started.html
 */
require_once FAVPRESS_DEMO_BASE_PATH . '/libs/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'favpress_demo_plugin_register_required_plugins');

function favpress_demo_plugin_register_required_plugins() {
    $plugins = array(
        array(
            'name'     => 'FavPress',
            'slug'     => 'favpress',
            'source'   => 'https://apps.moewe.io/favpress/master/favpress.zip',
            'required' => true
        ),
    );

    $config = array(
        'id'           => 'favpress_demo_plugin-tgm',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => ''
    );
    tgmpa($plugins, $config);
}

/**
 * Check for plugin updates (nothing to do with demo)
 */
require FAVPRESS_DEMO_BASE_PATH . '/libs/plugin-update-checker-4.2/plugin-update-checker.php';
$favpress_updater = Puc_v4_Factory::buildUpdateChecker(
    'https://raw.githubusercontent.com/moewe-io/favpress-demo-plugin/stable/updater.json',
    __FILE__,
    'favpress-demo-plugin',
    24
);
$favpress_updater->throttleRedundantChecks = true;
