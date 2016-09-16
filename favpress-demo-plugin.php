<?php
/*
	Plugin Name: FavPress Demo Plugin
	Plugin URI: http://www.favpress.com
	Description: This plugins shows what you can do with FavPress
	Version: 1.0.0
	Author: MOEWE GbR - Adrian M&ouml;rchen, Markus Weigelt
	Author URI: http://www.moewe.io
	License: GPLv3
*/

/**
 * Require FavPress as dependency
 *
 * @see http://favpress.com/docs/10_getting-started.html
 */

require_once __DIR__ . '/libs/class-tgm-plugin-activation.php';

add_action('tgmpa_register', 'favpress_demo_plugin_register_required_plugins');

function favpress_demo_plugin_register_required_plugins() {
    $plugins = array(
        array(
            'name'     => 'FavPress',
            'slug'     => 'favpress',
            'source'   => 'https://apps.moewe.io/favpress/stable/favpress.zip',
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
 * Check for plugin updates
 */
require __DIR__ . '/libs/plugin-update-checker-3.1/plugin-update-checker.php';
$favpress_updater = PucFactory::buildUpdateChecker(
    'https://raw.githubusercontent.com/moewe-io/favpress-demo-plugin/stable/updater.json',
    __FILE__,
    'favpress-demo-plugin',
    24
);
$favpress_updater->throttleRedundantChecks = true;
