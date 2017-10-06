<?php

return array(
    'id'       => 'favpress_meta_sample_2',
    'types'    => array('post'),
    'title'    => __('FavPress Repeating Group With Binding Fields', 'favpress-demo-plugin'),
    'priority' => 'high',
    'template' => array(
        array(
            'type'      => 'group',
            'repeating' => true,
            'name'      => 'binding_group',
            'title'     => __('Reference', 'favpress-demo-plugin'),
            'fields'    => array(
                array(
                    'type'        => 'textbox',
                    'name'        => 'name',
                    'label'       => __('Name', 'favpress-demo-plugin'),
                    'description' => __('Source Name', 'favpress-demo-plugin'),
                ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'url',
                    'label'       => __('URL', 'favpress-demo-plugin'),
                    'description' => __('Source URL', 'favpress-demo-plugin'),
                ),
                array(
                    'type'        => 'upload',
                    'name'        => 'image',
                    'label'       => __('Image', 'favpress-demo-plugin'),
                    'description' => __('Source Image', 'favpress-demo-plugin'),
                ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'shortcode',
                    'label'       => __('Shortcode', 'favpress-demo-plugin'),
                    'description' => __('Shortcode', 'favpress-demo-plugin'),
                    'binding'     => array(
                        'field'    => 'name,url, image',
                        'function' => 'favpress_simple_shortcode'
                    )
                ),
            ),
        ),
    ),
);

/**
 * EOF
 */
