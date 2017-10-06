<?php

/**
 * Include Custom Data Sources
 */

/** Use this hook add metabox and depend on FavPress */
add_action('favpress_add_metaboxes', 'favpress_demo_add_metaboxes');


function favpress_demo_add_metaboxes() {
    require_once 'admin/data_sources.php';

    /**
     * Load options, metaboxes, and shortcode generator array templates.
     */

// options
    $tmpl_opt = FAVPRESS_DEMO_BASE_PATH . '/admin/option/option.php';

// metaboxes
    $tmpl_mb1 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_1.php';
    $tmpl_mb2 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_2.php';
    $tmpl_mb3 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_3.php';
    $tmpl_mb4 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_4.php';
    $tmpl_mb5 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_5.php';
    $tmpl_mb6 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_6.php';
    $tmpl_mb6 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_6.php';
    $tmpl_mb7 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_7.php';
    $tmpl_mb8 = FAVPRESS_DEMO_BASE_PATH . '/admin/metabox/sample_8.php';

// shortocode generators
    $tmpl_sg1 = FAVPRESS_DEMO_BASE_PATH . '/admin/shortcode_generator/shortcodes1.php';
    $tmpl_sg2 = FAVPRESS_DEMO_BASE_PATH . '/admin/shortcode_generator/shortcodes2.php';

    /**
     * Create instance of Options
     */
    $theme_options = new FavPress_Option(array(
        'is_dev_mode'           => false,                                  // dev mode, default to false
        'option_key'            => 'vpt_option',                           // options key in db, required
        'page_slug'             => 'vpt_option',                           // options page slug, required
        'template'              => $tmpl_opt,                              // template file path or array, required
        'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
        'use_auto_group_naming' => true,                                   // default to true
        'use_util_menu'         => true,                                   // default to true, shows utility menu
        'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
        'layout'                => 'fixed',                                // fluid or fixed, default to fixed
        'page_title'            => __('FavPress Options', 'favpress-demo-plugin'), // page title
        'menu_label'            => __('FavPress Options', 'favpress-demo-plugin'), // menu label
    ));

    /**
     * Create instances of Metaboxes
     */
    $mb1 = new FavPress_Metabox($tmpl_mb1);
    $mb2 = new FavPress_Metabox($tmpl_mb2);
    $mb3 = new FavPress_Metabox($tmpl_mb3);
    $mb4 = new FavPress_Metabox($tmpl_mb4);
    $mb5 = new FavPress_Metabox($tmpl_mb5);
    $mb6 = new FavPress_Metabox($tmpl_mb6);
    $mb7 = new FavPress_Metabox($tmpl_mb7);
    $mb8 = new FavPress_Metabox($tmpl_mb8);

    /**
     * Create instances of Shortcode Generator
     */
    $tmpl_sg1 = array(
        'name'           => 'sg_1',                                        // unique name, required
        'template'       => $tmpl_sg1,                                     // template file or array, required
        'modal_title'    => __('FavPress Shortcodes 1', 'favpress-demo-plugin'), // modal title, default to empty string
        'button_title'   => __('FavPress', 'favpress-demo-plugin'),              // button title, default to empty string
        'types'          => array('post', 'page'),                       // at what post types the generator should works, default to post and page
        'included_pages' => array('appearance_page_vpt_option'),         // or to what other admin pages it should appears
    );
    $tmpl_sg2 = array(
        'name'         => 'sg_2',
        'template'     => $tmpl_sg2,
        'modal_title'  => __('FavPress Shortcodes 2', 'favpress-demo-plugin'),
        'button_title' => __('FavPress', 'favpress-demo-plugin'),
        'types'        => array('post', 'page'),
        'main_image'   => get_template_directory_uri() . '/public/img/vp_shortcode_icon.png',
        'sprite_image' => get_template_directory_uri() . '/public/img/vp_shortcode_icon_sprite.png',
    );

    $sg1 = new FavPress_ShortcodeGenerator($tmpl_sg1);
    $sg2 = new FavPress_ShortcodeGenerator($tmpl_sg2);
}

/*
 * EOF
 */
