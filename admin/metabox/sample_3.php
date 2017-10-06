<?php

return array(
    'id'       => 'favpress_meta_sample_3',
    'types'    => array('post'),
    'title'    => __('FavPress All Control Fields Demo', 'favpress-demo-plugin'),
    'priority' => 'high',
    'template' => array(
        array(
            'type'        => 'upload',
            'name'        => 'up_1',
            'label'       => __('Upload', 'favpress-demo-plugin'),
            'description' => __('Built in WP media upload, upload any media', 'favpress-demo-plugin'),
            'default'     => 'http://lorempixel.com/500/400/animals/',
        ),
        array(
            'type'                       => 'wpeditor',
            'label'                      => __('Content', 'favpress-demo-plugin'),
            'name'                       => 'content',
            'use_external_plugins'       => 1,
            'disabled_externals_plugins' => 'favpress_sc_button, sgtroces2',
            'disabled_internals_plugins' => '',
            'validation'                 => 'required',
        ),
        array(
            'type'        => 'codeeditor',
            'name'        => 'ce_1',
            'label'       => 'Custom CSS',
            'description' => 'Define your custom CSS',
            'mode'        => 'css',
            'theme'       => 'solarized_light',
        ),
        array(
            'type'        => 'sorter',
            'name'        => 'so_1',
            'label'       => 'Sorter',
            'description' => 'Select and sort your choices',
            'items'       => array(
                array(
                    'value' => 'item_1',
                    'label' => __('Item 1', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'item_2',
                    'label' => __('Item 2', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'item_3',
                    'label' => __('Item 3', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'item_4',
                    'label' => __('Item 4', 'favpress-demo-plugin'),
                ),
            ),
            'default'     => array(
                'item_2',
                'item_4',
            ),
        ),
        array(
            'type'        => 'checkbox',
            'name'        => 'cb_1',
            'label'       => __('Checkbox', 'favpress-demo-plugin'),
            'description' => __('Normal Checkbox', 'favpress-demo-plugin'),
            'items'       => array(
                array(
                    'value' => 'value_1',
                    'label' => __('Label 1', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'value_2',
                    'label' => __('Label 2', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'value_3',
                    'label' => __('Label 3', 'favpress-demo-plugin'),
                ),
            ),
            'default'     => array(
                'value_1',
            ),
        ),
        array(
            'type'        => 'checkimage',
            'name'        => 'ci_1',
            'label'       => __('CheckImage', 'favpress-demo-plugin'),
            'description' => __('Checkbox with image item', 'favpress-demo-plugin'),
            'items'       => array(
                array(
                    'value' => 'value_1',
                    'label' => __('Label 1', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/100x100',
                ),
                array(
                    'value' => 'value_2',
                    'label' => __('Label 2', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/120x80',
                ),
                array(
                    'value' => 'value_3',
                    'label' => __('Label 3', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/80x120',
                ),
                array(
                    'value' => 'value_4',
                    'label' => __('Label 4', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/50x50',
                ),
            ),
        ),
        array(
            'type'        => 'radiobutton',
            'name'        => 'rb_1',
            'label'       => __('RadioButton', 'favpress-demo-plugin'),
            'description' => __('Normal RadioButton', 'favpress-demo-plugin'),
            'items'       => array(
                array(
                    'value' => 'value_1',
                    'label' => __('Label 1', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'value_2',
                    'label' => __('Label 2', 'favpress-demo-plugin'),
                ),
                array(
                    'value' => 'value_3',
                    'label' => __('Label 3', 'favpress-demo-plugin'),
                ),
            ),
            'default'     => array(
                'value_1',
            ),
        ),
        array(
            'type'        => 'radioimage',
            'name'        => 'ri_1',
            'label'       => __('RadioImage', 'favpress-demo-plugin'),
            'description' => __('RadioButton with image item', 'favpress-demo-plugin'),
            'items'       => array(
                array(
                    'value' => 'value_1',
                    'label' => __('Label 1', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/100x100',
                ),
                array(
                    'value' => 'value_2',
                    'label' => __('Label 2', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/120x80',
                ),
                array(
                    'value' => 'value_3',
                    'label' => __('Label 3', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/80x120',
                ),
                array(
                    'value' => 'value_4',
                    'label' => __('Label 4', 'favpress-demo-plugin'),
                    'img'   => 'http://placehold.it/50x50',
                ),
            ),
        ),
        array(
            'type'        => 'color',
            'name'        => 'cl_2',
            'label'       => __('ColorPicker', 'favpress-demo-plugin'),
            'description' => __('ColorPicker using eyecon colorpicker library', 'favpress-demo-plugin'),
            'default'     => '#98ed28',
            'format'      => 'rgb'
        ),
        array(
            'type'        => 'date',
            'name'        => 'dt_1',
            'label'       => __('Date Picker', 'favpress-demo-plugin'),
            'description' => __('DatePicker using jQuery UI', 'favpress-demo-plugin'),
            'format'      => 'yy-mm-dd',
            'default'     => '2012-12-12',
        ),
        array(
            'type'        => 'radiobutton',
            'name'        => 'rb_roles',
            'label'       => __('Select Role', 'favpress-demo-plugin'),
            'description' => __('RadioButton field with WP Roles Data Source and **{{last}}** default item.', 'favpress-demo-plugin'),
            'items'       => array(
                'data' => array(
                    array(
                        'source' => 'function',
                        'value'  => 'favpress_get_roles',
                    ),
                ),
            ),
            'default'     => array(
                '{{last}}',
            ),
        ),
        array(
            'type'        => 'select',
            'name'        => 'se_pages',
            'label'       => __('Select Page', 'favpress-demo-plugin'),
            'description' => __('Select field with WP Pages Data Source', 'favpress-demo-plugin'),
            'items'       => array(
                'data' => array(
                    array(
                        'source' => 'function',
                        'value'  => 'favpress_get_pages',
                    ),
                ),
            ),
        ),
        array(
            'type'        => 'toggle',
            'name'        => 'tg_1',
            'label'       => __('Toggle', 'favpress-demo-plugin'),
            'description' => __('Yes or No question', 'favpress-demo-plugin'),
            'default'     => '1',
        ),
        array(
            'type'        => 'slider',
            'name'        => 'sl_1',
            'label'       => __('Decimal Slider', 'favpress-demo-plugin'),
            'description' => __('This slider has minimum value of -10, maximum value of 17.5, sliding step of 0.1 and default value 15.9, everything can be customized.', 'favpress-demo-plugin'),
            'min'         => '-10',
            'max'         => '17.5',
            'step'        => '0.1',
            'default'     => '15.9',
        ),
        array(
            'type'        => 'multiselect',
            'name'        => 'ms_categories',
            'label'       => __('Choose Categorie(s)', 'favpress-demo-plugin'),
            'description' => __('MultiSelect field with WP Categories Data Source and **{{first}}** **{{last}}** default items.', 'favpress-demo-plugin'),
            'items'       => array(
                'data' => array(
                    array(
                        'source' => 'function',
                        'value'  => 'favpress_get_categories',
                    ),
                ),
            ),
            'default'     => array(
                '{{first}}',
                '{{last}}',
            ),
        ),
        array(
            'type'        => 'textarea',
            'name'        => 'ta_1',
            'label'       => __('Textarea', 'favpress-demo-plugin'),
            'description' => __('Everytime you need long text.', 'favpress-demo-plugin'),
            'height'      => '300',
            'default'     => 'lorem ipsum',
        ),
    ),
);

/**
 * EOF
 */
