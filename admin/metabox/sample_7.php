<?php

return array(
    'id'       => 'favpress_meta_sample_7',
    'types'    => array('post'),
    'title'    => __('FavPress HTML Binding', 'favpress-demo-plugin'),
    'priority' => 'high',
    'template' => array(
        array(
            'type'      => 'group',
            'repeating' => false,
            'name'      => 'html_binding_group',
            'title'     => __('Typography', 'favpress-demo-plugin'),
            'fields'    => array(
                array(
                    'type'    => 'html',
                    'name'    => 'logo_font_preview',
                    'binding' => array(
                        'field'    => 'logo_font_face,logo_font_style,logo_font_weight,logo_font_size,logo_line_height',
                        'function' => 'favpress_font_preview',
                    ),
                ),
                array(
                    'type'        => 'select',
                    'name'        => 'logo_font_face',
                    'label'       => __('Logo Font Face', 'favpress-demo-plugin'),
                    'description' => __('Select Font', 'favpress-demo-plugin'),
                    'items'       => array(
                        'data' => array(
                            array(
                                'source' => 'function',
                                'value'  => 'favpress_get_gwf_family',
                            ),
                        ),
                    ),
                    'default'     => '{{first}}'
                ),
                array(
                    'type'        => 'radiobutton',
                    'name'        => 'logo_font_style',
                    'label'       => __('Logo Font Style', 'favpress-demo-plugin'),
                    'description' => __('Select Font Style', 'favpress-demo-plugin'),
                    'items'       => array(
                        'data' => array(
                            array(
                                'source' => 'binding',
                                'field'  => 'logo_font_face',
                                'value'  => 'favpress_get_gwf_style',
                            ),
                        ),
                    ),
                    'default'     => array(
                        '{{first}}',
                    ),
                ),
                array(
                    'type'        => 'radiobutton',
                    'name'        => 'logo_font_weight',
                    'label'       => __('Logo Font Weight', 'favpress-demo-plugin'),
                    'description' => __('Select Font Weight', 'favpress-demo-plugin'),
                    'items'       => array(
                        'data' => array(
                            array(
                                'source' => 'binding',
                                'field'  => 'logo_font_face',
                                'value'  => 'favpress_get_gwf_weight',
                            ),
                        ),
                    ),
                ),
                array(
                    'type'    => 'slider',
                    'name'    => 'logo_font_size',
                    'label'   => __('Logo Font Size', 'favpress-demo-plugin'),
                    'min'     => '5',
                    'max'     => '32',
                    'default' => '16',
                ),
                array(
                    'type'    => 'slider',
                    'name'    => 'logo_line_height',
                    'label'   => __('Logo Line Height (em)', 'favpress-demo-plugin'),
                    'min'     => '0',
                    'max'     => '3',
                    'default' => '1.5',
                    'step'    => '0.1',
                ),
            ),
        ),
    ),
);

/**
 * EOF
 */
