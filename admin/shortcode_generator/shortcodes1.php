<?php

return array(

    'Showcase' => array(
        'elements' => array(

            'all_controls' => array(
                'title'      => 'All Controls',
                'code'       => '[controls][/controls]',
                'attributes' => array(
                    array(
                        'name'                       => 'wpeditor',
                        'type'                       => 'wpeditor',
                        'label'                      => __('WP Visual Editor', 'favpress-demo-plugin'),
                        'use_external_plugins'       => 1,
                        'disabled_externals_plugins' => 'favpress_sc_button',
                        'disabled_internals_plugins' => '',
                    ),
                    array(
                        'name'  => 'radiobutton',
                        'type'  => 'radiobutton',
                        'label' => __('Radio Button', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'value_1',
                                'label' => 'Value 1'
                            ),
                            array(
                                'value' => 'value_2',
                                'label' => 'Value 2'
                            ),
                            array(
                                'value' => 'value_3',
                                'label' => 'Value 3'
                            ),
                        ),
                    ),
                    array(
                        'name'    => 'checkbox',
                        'type'    => 'checkbox',
                        'label'   => __('Checkbox', 'favpress-demo-plugin'),
                        'items'   => array(
                            array(
                                'value' => 'value_1',
                                'label' => 'Value 1'
                            ),
                            array(
                                'value' => 'value_2',
                                'label' => 'Value 2'
                            ),
                            array(
                                'value' => 'value_3',
                                'label' => 'Value 3'
                            ),
                        ),
                        'default' => array('{{first}}')
                    ),
                    array(
                        'name'  => 'select',
                        'type'  => 'select',
                        'label' => __('Select', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'value_1',
                                'label' => 'Value 1'
                            ),
                            array(
                                'value' => 'value_2',
                                'label' => 'Value 2'
                            ),
                            array(
                                'value' => 'value_3',
                                'label' => 'Value 3'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'fontawesome',
                        'type'  => 'fontawesome',
                        'label' => __('Fontawesome Icon', 'favpress-demo-plugin'),
                    ),
                    array(
                        'name'    => 'multiselect',
                        'type'    => 'multiselect',
                        'label'   => __('Multiselect', 'favpress-demo-plugin'),
                        'items'   => array(
                            array(
                                'value' => 'value_1',
                                'label' => 'Value 1'
                            ),
                            array(
                                'value' => 'value_2',
                                'label' => 'Value 2'
                            ),
                            array(
                                'value' => 'value_3',
                                'label' => 'Value 3'
                            ),
                        ),
                        'default' => array('{{first}}')
                    ),
                    array(
                        'name'    => 'color',
                        'type'    => 'color',
                        'label'   => __('Color', 'favpress-demo-plugin'),
                        'default' => '#00FF00',
                    ),
                    array(
                        'name'    => 'sorter',
                        'type'    => 'sorter',
                        'label'   => __('Sorter', 'favpress-demo-plugin'),
                        'items'   => array(
                            array(
                                'value' => 'value_1',
                                'label' => 'Value 1'
                            ),
                            array(
                                'value' => 'value_2',
                                'label' => 'Value 2'
                            ),
                            array(
                                'value' => 'value_3',
                                'label' => 'Value 3'
                            ),
                        ),
                        'default' => array('{{first}}')
                    ),
                    array(
                        'name'    => 'slider',
                        'type'    => 'slider',
                        'label'   => __('Slider', 'favpress-demo-plugin'),
                        'default' => '20',
                        'min'     => 5,
                        'max'     => 50,
                    ),
                    array(
                        'name'  => 'upload',
                        'type'  => 'upload',
                        'label' => __('Upload', 'favpress-demo-plugin'),
                    ),
                    array(
                        'name'  => 'date',
                        'type'  => 'date',
                        'label' => __('Date', 'favpress-demo-plugin'),
                    ),
                    array(
                        'name'    => 'textarea',
                        'type'    => 'textarea',
                        'label'   => __('Textarea', 'favpress-demo-plugin'),
                        'default' => 'test',
                    ),
                    array(
                        'name'    => 'checkimage',
                        'type'    => 'checkimage',
                        'label'   => __('Check Image', 'favpress-demo-plugin'),
                        'items'   => array(
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
                        'default' => array('{{first}}', '{{last}}'),
                    ),
                    array(
                        'name'    => 'radioimage',
                        'type'    => 'radioimage',
                        'label'   => __('Radio Image', 'favpress-demo-plugin'),
                        'items'   => array(
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
                        'default' => array('{{first}}'),
                    ),
                    array(
                        'name'    => 'codeeditor',
                        'type'    => 'codeeditor',
                        'label'   => __('Code Editor', 'favpress-demo-plugin'),
                        'default' => 'test',
                    ),
                    array(
                        'name'  => 'toggle',
                        'type'  => 'toggle',
                        'label' => __('Toggle', 'favpress-demo-plugin'),
                    ),
                )
            ),

        ),
    ),

    'Layout System' => array(
        'elements' => array(

            'section' => array(
                'title'      => 'Section',
                'code'       => '[section][/section]',
                'attributes' => array(
                    array(
                        'name'  => 'accent',
                        'type'  => 'select',
                        'label' => __('Color Accent', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'standard',
                                'label' => 'Standard Color Accent'
                            ),
                            array(
                                'value' => 'alternative_1',
                                'label' => 'Alternative 1 Color Accent'
                            ),
                            array(
                                'value' => 'alternative_2',
                                'label' => 'Alternative 2 Color Accent'
                            ),
                            array(
                                'value' => 'alternative_3',
                                'label' => 'Alternative 3 Color Accent'
                            ),
                            array(
                                'value' => 'alternative_4',
                                'label' => 'Alternative 4 Color Accent'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'background_image_url',
                        'type'  => 'upload',
                        'label' => __('Background Image URL', 'favpress-demo-plugin'),
                    ),
                    array(
                        'name'  => 'background_image_repeat',
                        'type'  => 'select',
                        'label' => __('Background Image Repeat', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'repeat-x',
                                'label' => 'repeat-x'
                            ),
                            array(
                                'value' => 'repeat-y',
                                'label' => 'repeat-y'
                            ),
                            array(
                                'value' => 'no-repeat',
                                'label' => 'no-repeat'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'background_image_attachment',
                        'type'  => 'select',
                        'label' => __('Background Image Attachment', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'scroll',
                                'label' => 'scroll'
                            ),
                            array(
                                'value' => 'fixed',
                                'label' => 'fixed'
                            ),
                            array(
                                'value' => 'inherit',
                                'label' => 'inherit'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'background_image_position',
                        'type'  => 'select',
                        'label' => __('Background Image Position', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'top left',
                                'label' => 'top left'
                            ),
                            array(
                                'value' => 'top center',
                                'label' => 'top center'
                            ),
                            array(
                                'value' => 'top right',
                                'label' => 'top right'
                            ),
                            array(
                                'value' => 'center left',
                                'label' => 'center left'
                            ),
                            array(
                                'value' => 'center center',
                                'label' => 'center center'
                            ),
                            array(
                                'value' => 'center right',
                                'label' => 'center right'
                            ),
                            array(
                                'value' => 'bottom left',
                                'label' => 'bottom left'
                            ),
                            array(
                                'value' => 'bottom center',
                                'label' => 'bottom center'
                            ),
                            array(
                                'value' => 'bottom right',
                                'label' => 'bottom right'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'background_image_size',
                        'type'  => 'select',
                        'label' => __('Background Image Size', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'cover',
                                'label' => 'cover'
                            ),
                            array(
                                'value' => 'contain',
                                'label' => 'contain'
                            ),
                        ),
                    ),
                ),
            ),
            'grid'    => array(
                'title'      => 'Grid',
                'code'       => '[grid][/grid]',
                'attributes' => array(
                    array(
                        'name'  => 'col',
                        'type'  => 'slider',
                        'label' => __('Column', 'favpress-demo-plugin'),
                        'min'   => 1,
                        'max'   => 12,
                    ),
                    array(
                        'name'  => 'offset',
                        'type'  => 'slider',
                        'label' => __('Offset', 'favpress-demo-plugin'),
                        'min'   => 0,
                        'max'   => 11,
                    ),
                ),
            ),

        )
    ),

    'Elements' => array(
        'elements' => array(

            'button' => array(
                'title'      => 'Button',
                'code'       => '[button][/button]',
                'attributes' => array(
                    array(
                        'name'    => 'accent',
                        'type'    => 'select',
                        'label'   => __('Color Accent', 'favpress-demo-plugin'),
                        'items'   => array(
                            array(
                                'value' => 'standard',
                                'label' => 'Standard Color Accent'
                            ),
                            array(
                                'value' => 'alternative_1',
                                'label' => 'Alternative 1 Color Accent'
                            ),
                            array(
                                'value' => 'alternative_2',
                                'label' => 'Alternative 2 Color Accent'
                            ),
                            array(
                                'value' => 'alternative_3',
                                'label' => 'Alternative 3 Color Accent'
                            ),
                            array(
                                'value' => 'alternative_4',
                                'label' => 'Alternative 4 Color Accent'
                            ),
                        ),
                        'default' => array('{{first}}')
                    ),
                    array(
                        'name'  => 'text_color',
                        'type'  => 'color',
                        'label' => __('Text Color', 'favpress-demo-plugin'),
                    ),
                    array(
                        'name'  => 'background_color',
                        'type'  => 'color',
                        'label' => __('Background Color', 'favpress-demo-plugin'),
                    ),
                    array(
                        'name'  => 'url',
                        'type'  => 'textbox',
                        'label' => __('Button URL', 'favpress-demo-plugin'),
                    ),
                )
            ),

            'list' => array(
                'title' => 'List',
                'code'  => '[list][li icon="" color=""]Item 1[/li][li icon="icon-ok" color=""]Item 2[/li][li icon="icon-remove" color=""]Item 3[/li][/list]',
            ),

            'icon' => array(
                'title'      => 'Icon',
                'code'       => '[icon][/icon]',
                'attributes' => array(
                    array(
                        'name'  => 'size',
                        'type'  => 'select',
                        'label' => __('Size', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'small',
                                'label' => 'small'
                            ),
                            array(
                                'value' => 'medium',
                                'label' => 'medium'
                            ),
                            array(
                                'value' => 'large',
                                'label' => 'large'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'name',
                        'type'  => 'fontawesome',
                        'label' => __('Icon name', 'favpress-demo-plugin'),
                    ),
                )
            ),

            'pricing_table' => array(
                'title' => 'Pricing Table',
                'code'  => '[pricing_table][/pricing_table]',
            ),

            'pricing_column' => array(
                'title'      => 'Pricing Column',
                'code'       => '[pricing_column][/pricing_column]',
                'attributes' => array(
                    array(
                        'name'  => 'color_accent',
                        'type'  => 'select',
                        'label' => __('Color Accent', 'favpress-demo-plugin'),
                        'items' => array(
                            array(
                                'value' => 'small',
                                'label' => 'small'
                            ),
                            array(
                                'value' => 'medium',
                                'label' => 'medium'
                            ),
                            array(
                                'value' => 'large',
                                'label' => 'large'
                            ),
                        ),
                    ),
                    array(
                        'name'  => 'name',
                        'type'  => 'fontawesome',
                        'label' => __('Icon name', 'favpress-demo-plugin'),
                    ),
                )
            ),

        ),
    ),

    'Media Embeds' => array(
        'elements' => array(

            'youtube'    => array(
                'title'      => 'Youtube',
                'code'       => '[youtube][/youtube]',
                'attributes' => array(
                    array(
                        'name'  => 'id',
                        'label' => __('ID', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'width',
                        'label' => __('Width', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'height',
                        'label' => __('Height', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                )
            ),
            'vimeo'      => array(
                'title'      => 'Vimeo',
                'code'       => '[vimeo][/vimeo]',
                'attributes' => array(
                    array(
                        'name'  => 'id',
                        'label' => __('ID', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'width',
                        'label' => __('Width', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'height',
                        'label' => __('Height', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                )
            ),
            'soundcloud' => array(
                'title'      => 'Soundcloud',
                'code'       => '[soundcloud][/soundcloud]',
                'attributes' => array(
                    array(
                        'name'  => 'url',
                        'label' => __('URL', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'width',
                        'label' => __('Width', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'height',
                        'label' => __('Height', 'favpress-demo-plugin'),
                        'type'  => 'textbox'
                    ),
                    array(
                        'name'  => 'color',
                        'label' => __('Height', 'favpress-demo-plugin'),
                        'type'  => 'color'
                    ),
                    array(
                        'name'  => 'auto_play',
                        'label' => __('Autoplay', 'favpress-demo-plugin'),
                        'type'  => 'toggle'
                    ),
                    array(
                        'name'  => 'show_comments',
                        'label' => __('Show Comments', 'favpress-demo-plugin'),
                        'type'  => 'toggle'
                    ),
                )
            ),

        )
    )

);

/**
 * EOF
 */
