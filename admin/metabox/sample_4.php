<?php

return array(
    'id'       => 'favpress_meta_sample_4',
    'types'    => array('post'),
    'title'    => __('FavPress All Notebox', 'favpress-demo-plugin'),
    'priority' => 'low',
    'template' => array(
        array(
            'type'        => 'notebox',
            'name'        => 'nb_1',
            'label'       => __('Normal Announcement', 'favpress-demo-plugin'),
            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
            'status'      => 'normal',
        ),
        array(
            'type'        => 'notebox',
            'name'        => 'nb_2',
            'label'       => __('Info Announcement', 'favpress-demo-plugin'),
            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
            'status'      => 'info',
        ),
        array(
            'type'        => 'notebox',
            'name'        => 'nb_3',
            'label'       => __('Success Announcement', 'favpress-demo-plugin'),
            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
            'status'      => 'success',
        ),
        array(
            'type'        => 'notebox',
            'name'        => 'nb_4',
            'label'       => __('Warning Announcement', 'favpress-demo-plugin'),
            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
            'status'      => 'warning',
        ),
        array(
            'type'        => 'notebox',
            'name'        => 'nb_5',
            'label'       => __('Critical Announcement', 'favpress-demo-plugin'),
            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
            'status'      => 'error',
        ),
        array(
            'type'      => 'group',
            'repeating' => false,
            'length'    => 1,
            'name'      => 'notebox_group',
            'title'     => __('Noteboxes inside Group', 'favpress-demo-plugin'),
            'fields'    => array(
                array(
                    'type'        => 'notebox',
                    'name'        => 'nb_5',
                    'label'       => __('Normal Announcement', 'favpress-demo-plugin'),
                    'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                    'status'      => 'normal',
                ),
                array(
                    'type'        => 'notebox',
                    'name'        => 'nb_6',
                    'label'       => __('Info Announcement', 'favpress-demo-plugin'),
                    'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                    'status'      => 'info',
                ),
                array(
                    'type'        => 'notebox',
                    'name'        => 'nb_7',
                    'label'       => __('Success Announcement', 'favpress-demo-plugin'),
                    'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                    'status'      => 'success',
                ),
                array(
                    'type'        => 'notebox',
                    'name'        => 'nb_8',
                    'label'       => __('Warning Announcement', 'favpress-demo-plugin'),
                    'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                    'status'      => 'warning',
                ),
                array(
                    'type'        => 'notebox',
                    'name'        => 'nb_9',
                    'label'       => __('Critical Announcement', 'favpress-demo-plugin'),
                    'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                    'status'      => 'error',
                ),
            ),
        ),
    ),
);

/**
 * EOF
 */
