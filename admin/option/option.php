<?php

return array(
    'title' => __('FavPress Option Panel', 'favpress-demo-plugin'),
    'logo'  => '',
    'menus' => array(
        array(
            'title' => __('Standard Controls', 'favpress-demo-plugin'),
            'name'  => 'menu_1',
            'icon'  => 'font-awesome:fa-magic',
            'menus' => array(
                array(
                    'title'    => __('Regular', 'favpress-demo-plugin'),
                    'name'     => 'submenu_1',
                    'icon'     => 'font-awesome:fa-th-large',
                    'controls' => array(
                        array(
                            'type'        => 'section',
                            'title'       => __('TextBox', 'favpress-demo-plugin'),
                            'name'        => 'section_1',
                            'description' => __('TextBox and TextArea Showcase', 'favpress-demo-plugin'),
                            'fields'      => array(
                                array(
                                    'type'        => 'textbox',
                                    'name'        => 'tb_1',
                                    'label'       => __('Alphabet', 'favpress-demo-plugin'),
                                    'description' => __('Only alphabets allowed here.', 'favpress-demo-plugin'),
                                    'validation'  => 'alphabet',
                                ),
                                array(
                                    'type'        => 'textbox',
                                    'name'        => 'tb_2',
                                    'label'       => __('Alphanumeric', 'favpress-demo-plugin'),
                                    'description' => __('Only alphabets and numbers allowed here.', 'favpress-demo-plugin'),
                                    'default'     => 'abcd123',
                                    'validation'  => 'alphanumeric',
                                ),
                                array(
                                    'type'        => 'textbox',
                                    'name'        => 'tb_3',
                                    'label'       => __('Numeric', 'favpress-demo-plugin'),
                                    'description' => __('Only numbers allowed here.', 'favpress-demo-plugin'),
                                    'default'     => '123',
                                    'validation'  => 'numeric',
                                ),
                                array(
                                    'type'        => 'textbox',
                                    'name'        => 'tb_4',
                                    'label'       => __('Email', 'favpress-demo-plugin'),
                                    'description' => __('Only valid email allowed here.', 'favpress-demo-plugin'),
                                    'default'     => 'contact@vafour.com',
                                    'validation'  => 'email',
                                ),
                                array(
                                    'type'        => 'textbox',
                                    'name'        => 'tb_5',
                                    'label'       => __('URL', 'favpress-demo-plugin'),
                                    'description' => __('Only valid URL allowed here.', 'favpress-demo-plugin'),
                                    'default'     => 'http://favpress.com',
                                    'validation'  => 'url',
                                ),
                            ),
                        ),
                        array(
                            'type'        => 'textarea',
                            'name'        => 'ta_1',
                            'label'       => __('Textarea', 'favpress-demo-plugin'),
                            'description' => __('Everytime you need long text..', 'favpress-demo-plugin'),
                            'default'     => 'lorem ipsum',
                        ),
                        array(
                            'type'        => 'section',
                            'name'        => 'section_2',
                            'title'       => __('Multiple Choices', 'favpress-demo-plugin'),
                            'description' => __('Controls with multiple specified options.', 'favpress-demo-plugin'),
                            'fields'      => array(
                                array(
                                    'type'        => 'checkbox',
                                    'name'        => 'cb_1',
                                    'label'       => __('CheckBox with Min and Max Selected Validation', 'favpress-demo-plugin'),
                                    'description' => __('Minimum selected of 2 items and maximum selected of 2 items, in other words need to choose exactly 2 items.', 'favpress-demo-plugin'),
                                    'validation'  => 'minselected[2]|maxselected[2]',
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
                                    'type'        => 'checkbox',
                                    'name'        => 'cb_2',
                                    'label'       => __('CheckBox with Required Validation', 'favpress-demo-plugin'),
                                    'description' => __('Required to choose anything.', 'favpress-demo-plugin'),
                                    'validation'  => 'required',
                                    'default'     => '',
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
                                ),
                                array(
                                    'type'    => 'radiobutton',
                                    'name'    => 'rb_1',
                                    'label'   => __('RadioButton', 'favpress-demo-plugin'),
                                    'items'   => array(
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
                                    'default' => array(
                                        'value_3',
                                    ),
                                ),
                                array(
                                    'type'    => 'select',
                                    'name'    => 'ss_1',
                                    'label'   => __('Single Select Box', 'favpress-demo-plugin'),
                                    'items'   => array(
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
                                    'default' => array(
                                        'value_3',
                                    ),
                                ),
                                array(
                                    'type'    => 'select',
                                    'name'    => 'ss_2',
                                    'label'   => __('Select Box with Get Categories Data Source', 'favpress-demo-plugin'),
                                    'items'   => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value'  => 'favpress_get_categories',
                                            ),
                                        ),
                                    ),
                                    'default' => array(
                                        '{{last}}',
                                    ),
                                ),
                                array(
                                    'type'        => 'multiselect',
                                    'name'        => 'ms_1',
                                    'label'       => __('Multiple Select Box', 'favpress-demo-plugin'),
                                    'description' => __('Minimum selected of 2 items and maximum selected of 3 items.', 'favpress-demo-plugin'),
                                    'validation'  => 'minselected[2]|maxselected[3]',
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
                                        array(
                                            'value' => 'value_4',
                                            'label' => __('Label 4', 'favpress-demo-plugin'),
                                        ),
                                    ),
                                    'default'     => array(
                                        '{{first}}',
                                        '{{last}}',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'title'    => __('Image', 'favpress-demo-plugin'),
                    'name'     => 'submenu_2',
                    'icon'     => 'font-awesome:fa-picture-o',
                    'controls' => array(
                        array(
                            'type'   => 'section',
                            'title'  => __('Check Images', 'favpress-demo-plugin'),
                            'fields' => array(
                                array(
                                    'type'        => 'checkimage',
                                    'name'        => 'ci_1',
                                    'label'       => __('Various Sized Images', 'favpress-demo-plugin'),
                                    'description' => __('CheckImage with unspecified item max height and item max width', 'favpress-demo-plugin'),
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
                                    'type'            => 'checkimage',
                                    'name'            => 'ci_2',
                                    'label'           => __('Specified Images Maximum Height', 'favpress-demo-plugin'),
                                    'description'     => __('CheckImage with specified item max height', 'favpress-demo-plugin'),
                                    'item_max_height' => '70',
                                    'items'           => array(
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
                                    'default'         => array(
                                        'value_1',
                                        'value_2',
                                    ),
                                ),
                                array(
                                    'type'           => 'checkimage',
                                    'name'           => 'ci_3',
                                    'label'          => __('Specified Images Maximum Width', 'favpress-demo-plugin'),
                                    'description'    => __('CheckImage with specified item max width', 'favpress-demo-plugin'),
                                    'item_max_width' => '50',
                                    'items'          => array(
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
                                    'default'        => array(
                                        'value_3',
                                        'value_4',
                                    ),
                                ),
                                array(
                                    'type'            => 'checkimage',
                                    'name'            => 'ci_4',
                                    'label'           => __('Specified Images Maximum Width and Height', 'favpress-demo-plugin'),
                                    'description'     => __('CheckImage with specified item max width and item max height', 'favpress-demo-plugin'),
                                    'item_max_height' => '70',
                                    'item_max_width'  => '70',
                                    'items'           => array(
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
                                    'default'         => array(
                                        'value_1',
                                        'value_4',
                                    ),
                                ),
                                array(
                                    'type'            => 'checkimage',
                                    'name'            => 'ci_5',
                                    'label'           => __('Validation Rules Applied', 'favpress-demo-plugin'),
                                    'description'     => __('Minimum selected of 2 items and Maximum selected of 3 items.', 'favpress-demo-plugin'),
                                    'item_max_height' => '70',
                                    'item_max_width'  => '70',
                                    'validation'      => 'required|minselected[2]|maxselected[3]',
                                    'items'           => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                        array(
                                            'value' => 'value_4',
                                            'label' => __('Label 4', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                    ),
                                    'default'         => array(
                                        'value_1',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'type'   => 'section',
                            'title'  => __('Radio Images', 'favpress-demo-plugin'),
                            'fields' => array(
                                array(
                                    'type'        => 'radioimage',
                                    'name'        => 'ri_1',
                                    'label'       => __('Various Sized Images', 'favpress-demo-plugin'),
                                    'description' => __('RadioImage with unspecified item max height and item max width', 'favpress-demo-plugin'),
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
                                    'type'            => 'radioimage',
                                    'name'            => 'ri_2',
                                    'label'           => __('Specified Images Maximum Height', 'favpress-demo-plugin'),
                                    'description'     => __('RadioImage with specified item max height', 'favpress-demo-plugin'),
                                    'item_max_height' => '70',
                                    'items'           => array(
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
                                    'default'         => array(
                                        'value_1',
                                    ),
                                ),
                                array(
                                    'type'           => 'radioimage',
                                    'name'           => 'ri_3',
                                    'label'          => __('Specified Images Maximum Width', 'favpress-demo-plugin'),
                                    'description'    => __('RadioImage with specified item max width', 'favpress-demo-plugin'),
                                    'item_max_width' => '50',
                                    'items'          => array(
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
                                    'default'        => array(
                                        'value_3',
                                    ),
                                ),
                                array(
                                    'type'            => 'radioimage',
                                    'name'            => 'ri_4',
                                    'label'           => __('Specified Images Maximum Width and Height', 'favpress-demo-plugin'),
                                    'description'     => __('RadioImage with specified item max width and item max height', 'favpress-demo-plugin'),
                                    'item_max_height' => '70',
                                    'item_max_width'  => '70',
                                    'items'           => array(
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
                                    'default'         => array(
                                        'value_4',
                                    ),
                                ),
                                array(
                                    'type'            => 'radioimage',
                                    'name'            => 'ri_5',
                                    'label'           => __('Validation Rules Applied', 'favpress-demo-plugin'),
                                    'description'     => __('Required to Choose.', 'favpress-demo-plugin'),
                                    'item_max_height' => '70',
                                    'item_max_width'  => '70',
                                    'validation'      => 'required',
                                    'items'           => array(
                                        array(
                                            'value' => 'value_1',
                                            'label' => __('Label 1', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                        array(
                                            'value' => 'value_2',
                                            'label' => __('Label 2', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                        array(
                                            'value' => 'value_3',
                                            'label' => __('Label 3', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                        array(
                                            'value' => 'value_4',
                                            'label' => __('Label 4', 'favpress-demo-plugin'),
                                            'img'   => 'http://placehold.it/80x80',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        array(
            'title'    => __('Special Controls', 'favpress-demo-plugin'),
            'name'     => 'menu_2',
            'icon'     => 'font-awesome:fa-gift',
            'controls' => array(
                array(
                    'type'   => 'section',
                    'title'  => __('Section 1', 'favpress-demo-plugin'),
                    'fields' => array(
                        array(
                            'type'                       => 'wpeditor',
                            'name'                       => 'we_1',
                            'label'                      => __('WP TinyMCE Editor', 'favpress-demo-plugin'),
                            'description'                => __('Wordpress tinyMCE editor.', 'favpress-demo-plugin'),
                            'use_external_plugins'       => '1',
                            'disabled_externals_plugins' => '',
                            'disabled_internals_plugins' => '',
                        ),
                        array(
                            'type'        => 'toggle',
                            'name'        => 'tg_1',
                            'label'       => __('Toggle', 'favpress-demo-plugin'),
                            'description' => __('Suits the need to ask user a yes or no option.', 'favpress-demo-plugin'),
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
                            'type'        => 'slider',
                            'name'        => 'sl_2',
                            'label'       => __('Custom Step Slider', 'favpress-demo-plugin'),
                            'description' => __('This slider has minimum value of 100, maximum value of 1000, sliding step of 5 and default value 275, everything can be customized.', 'favpress-demo-plugin'),
                            'min'         => '100',
                            'max'         => '1000',
                            'step'        => '5',
                            'default'     => '275',
                        ),
                        array(
                            'type'        => 'upload',
                            'name'        => 'up_1',
                            'label'       => __('Upload', 'favpress-demo-plugin'),
                            'description' => __('Media uploader, using the powerful WP Media Upload', 'favpress-demo-plugin'),
                            'default'     => 'http://lorempixel.com/500/400/animals/',
                        ),
                        array(
                            'type'        => 'color',
                            'name'        => 'cl_1',
                            'label'       => __('Color 1', 'favpress-demo-plugin'),
                            'description' => __('Color Picker, you can set the default color.', 'favpress-demo-plugin'),
                            'default'     => 'rgba(255,0,0,0.5)',
                            'format'      => 'rgba',
                        ),
                        array(
                            'type'        => 'color',
                            'name'        => 'cl_2',
                            'label'       => __('Color 2', 'favpress-demo-plugin'),
                            'description' => __('Color Picker, you can set the default color.', 'favpress-demo-plugin'),
                            'default'     => '#98ed28',
                        ),
                        array(
                            'type'        => 'date',
                            'name'        => 'dt_1',
                            'label'       => __('International Date Format', 'favpress-demo-plugin'),
                            'description' => __('Date Picker with International date format.', 'favpress-demo-plugin'),
                            'format'      => 'yy-mm-dd',
                            'default'     => '2012-12-12',
                        ),
                        array(
                            'type'        => 'date',
                            'name'        => 'dt_2',
                            'label'       => __('Asian Date Format', 'favpress-demo-plugin'),
                            'description' => __('Date Picker with Asian date format.', 'favpress-demo-plugin'),
                            'format'      => 'dd-mm-yy',
                            'default'     => '',
                            'validation'  => 'required',
                        ),
                        array(
                            'type'        => 'date',
                            'name'        => 'dt_3',
                            'label'       => __('Ranged Date Picker', 'favpress-demo-plugin'),
                            'description' => __('The range can be exact date or formatted string to define the offset from today, for example &quot;+1D&quot; will be parsed as tommorow date, or &quot;+1D +1W&quot;, please refer to [jQueryUI Datepicker Docs](http://jqueryui.com/datepicker/#min-max)', 'favpress-demo-plugin'),
                            'min_date'    => '1-1-2000',
                            'max_date'    => 'today',
                            'format'      => 'yy-mm-dd',
                            'default'     => '-1W',
                        ),
                        array(
                            'type'        => 'fontawesome',
                            'name'        => 'fa_1',
                            'label'       => __('Fontawesome Icon', 'favpress-demo-plugin'),
                            'description' => __('Fontawesome icon chooser with small preview.', 'favpress-demo-plugin'),
                            'default'     => array(
                                '{{first}}',
                            ),
                        ),
                        array(
                            'type'          => 'sorter',
                            'name'          => 'so_1',
                            'max_selection' => 3,
                            'label'         => __('Sorter', 'favpress-demo-plugin'),
                            'description'   => __('Select and sort your choices', 'favpress-demo-plugin'),
                            'items'         => array(
                                'data' => array(
                                    array(
                                        'source' => 'function',
                                        'value'  => 'favpress_get_social_medias',
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'type'        => 'codeeditor',
                            'name'        => 'ce_1',
                            'label'       => __('Custom CSS', 'favpress-demo-plugin'),
                            'description' => __('Write your custom css here.', 'favpress-demo-plugin'),
                            'theme'       => 'github',
                            'mode'        => 'css',
                        ),
                        array(
                            'type'        => 'codeeditor',
                            'name'        => 'ce_2',
                            'label'       => __('Custom JS', 'favpress-demo-plugin'),
                            'description' => __('Write your custom js here.', 'favpress-demo-plugin'),
                            'theme'       => 'twilight',
                            'mode'        => 'javascript',
                        ),
                    ),
                ),
            ),
        ),
        array(
            'title' => __('Custom Data Source', 'favpress-demo-plugin'),
            'name'  => 'menu_3',
            'icon'  => 'font-awesome:fa-th-list',
            'menus' => array(
                array(
                    'title'    => __('Dynamic', 'favpress-demo-plugin'),
                    'name'     => 'dynamic_data_source',
                    'icon'     => 'font-awesome:fa-fire',
                    'controls' => array(
                        array(
                            'type'   => 'section',
                            'title'  => __('Data Source and Smart Tags', 'favpress-demo-plugin'),
                            'fields' => array(
                                array(
                                    'type'        => 'multiselect',
                                    'name'        => 'ms_categories',
                                    'label'       => __('Categories', 'favpress-demo-plugin'),
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
                                    'type'        => 'select',
                                    'name'        => 'se_pages',
                                    'label'       => __('Pages', 'favpress-demo-plugin'),
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
                                    'type'        => 'checkbox',
                                    'name'        => 'cb_users',
                                    'label'       => __('Users Data Source', 'favpress-demo-plugin'),
                                    'description' => __('Checkbox field with WP Users Data Source and **{{all}}** default items.', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'params' => 'admin',
                                                'value'  => 'favpress_get_users',
                                            ),
                                        ),
                                    ),
                                    'default'     => array(
                                        '{{all}}',
                                    ),
                                ),
                                array(
                                    'type'        => 'radiobutton',
                                    'name'        => 'rb_roles',
                                    'label'       => __('Roles', 'favpress-demo-plugin'),
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
                                    'type'        => 'multiselect',
                                    'name'        => 'ms_tags',
                                    'label'       => __('Tags', 'favpress-demo-plugin'),
                                    'description' => __('MultiSelect field with WP Tags Data Source and **{{first}}** default items.', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value'  => 'favpress_get_tags',
                                            ),
                                        ),
                                    ),
                                    'default'     => array(
                                        '{{first}}',
                                    ),
                                ),
                                array(
                                    'type'        => 'select',
                                    'name'        => 'se_posts',
                                    'label'       => __('Posts', 'favpress-demo-plugin'),
                                    'description' => __('Select field with WP Post Data Source', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value'  => 'favpress_get_posts',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'title'    => __('Binding', 'favpress-demo-plugin'),
                    'name'     => 'binding_data_source',
                    'icon'     => 'font-awesome:fa-link',
                    'controls' => array(
                        array(
                            'type'   => 'section',
                            'title'  => __('What a Wonderful World', 'favpress-demo-plugin'),
                            'fields' => array(
                                array(
                                    'type'        => 'select',
                                    'name'        => 'big_continent',
                                    'label'       => __('Big Continent', 'favpress-demo-plugin'),
                                    'description' => __('Big Continent', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value'  => 'favpress_bind_bigcontinents',
                                            ),
                                        ),
                                    ),
                                    'default'     => '{{last}}',
                                ),
                                array(
                                    'type'        => 'radiobutton',
                                    'name'        => 'continent',
                                    'label'       => __('Continent', 'favpress-demo-plugin'),
                                    'description' => __('Continent', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'binding',
                                                'field'  => 'big_continent',
                                                'value'  => 'favpress_bind_continents',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'type'        => 'select',
                                    'name'        => 'country',
                                    'label'       => __('Country', 'favpress-demo-plugin'),
                                    'description' => __('Country', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'binding',
                                                'field'  => 'continent',
                                                'value'  => 'favpress_bind_countries',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        array(
            'title' => __('Fields Interactions', 'favpress-demo-plugin'),
            'name'  => 'fields_interactions',
            'icon'  => 'font-awesome:fa-exchange',
            'menus' => array(
                array(
                    'name'     => 'binding_field',
                    'title'    => __('Binding Field', 'favpress-demo-plugin'),
                    'icon'     => 'font-awesome:fa-retweet',
                    'controls' => array(
                        array(
                            'type'   => 'section',
                            'title'  => __('Color Set', 'favpress-demo-plugin'),
                            'fields' => array(
                                array(
                                    'type'    => 'select',
                                    'name'    => 'color_preset',
                                    'label'   => __('Color Preset', 'favpress-demo-plugin'),
                                    'default' => 'red',
                                    'items'   => array(
                                        array(
                                            'value' => 'red',
                                            'label' => __('Red', 'favpress-demo-plugin'),
                                        ),
                                        array(
                                            'value' => 'green',
                                            'label' => __('Green', 'favpress-demo-plugin'),
                                        ),
                                        array(
                                            'value' => 'blue',
                                            'label' => __('Blue', 'favpress-demo-plugin'),
                                        ),
                                    ),
                                ),
                                array(
                                    'type'    => 'color',
                                    'name'    => 'color_accent',
                                    'label'   => __('Color Accent', 'favpress-demo-plugin'),
                                    'binding' => array(
                                        'field'    => 'color_preset',
                                        'function' => 'favpress_bind_color_accent',
                                    ),
                                ),
                                array(
                                    'type'    => 'color',
                                    'name'    => 'color_subtle',
                                    'label'   => __('Color Subtle', 'favpress-demo-plugin'),
                                    'binding' => array(
                                        'field'    => 'color_preset',
                                        'function' => 'favpress_bind_color_subtle',
                                    ),
                                ),
                                array(
                                    'type'    => 'color',
                                    'name'    => 'color_background',
                                    'label'   => __('Color Background', 'favpress-demo-plugin'),
                                    'binding' => array(
                                        'field'    => 'color_preset',
                                        'function' => 'favpress_bind_color_background',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'name'     => 'dependent_field',
                    'title'    => __('Dependent Field', 'favpress-demo-plugin'),
                    'icon'     => 'font-awesome:fa-key',
                    'controls' => array(
                        array(
                            'type'   => 'section',
                            'title'  => __('Decider', 'favpress-demo-plugin'),
                            'name'   => 'section_custom_font_decider',
                            'fields' => array(
                                array(
                                    'type'        => 'toggle',
                                    'name'        => 'use_custom_font',
                                    'label'       => __('Use Custom Font', 'favpress-demo-plugin'),
                                    'description' => __('Use custom font or not', 'favpress-demo-plugin'),
                                ),
                            ),
                        ),
                        array(
                            'type'       => 'section',
                            'title'      => __('Custom Font', 'favpress-demo-plugin'),
                            'name'       => 'section_custom_font',
                            'dependency' => array(
                                'field'    => 'use_custom_font',
                                'function' => 'favpress_dep_boolean',
                            ),
                            'fields'     => array(
                                array(
                                    'type'        => 'select',
                                    'name'        => 'dep_font_face',
                                    'label'       => __('Font Face', 'favpress-demo-plugin'),
                                    'description' => __('Select Font', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value'  => 'favpress_get_gwf_family',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'type'        => 'radiobutton',
                                    'name'        => 'dep_font_style',
                                    'label'       => __('Font Style', 'favpress-demo-plugin'),
                                    'description' => __('Select Font Style', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'binding',
                                                'field'  => 'dep_font_face',
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
                                    'name'        => 'dep_font_weight',
                                    'label'       => __('Font Weight', 'favpress-demo-plugin'),
                                    'description' => __('Select Font Weight', 'favpress-demo-plugin'),
                                    'items'       => array(
                                        'data' => array(
                                            array(
                                                'source' => 'binding',
                                                'field'  => 'dep_font_face',
                                                'value'  => 'favpress_get_gwf_weight',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'type'    => 'multiselect',
                                    'name'    => 'dep_font_subset',
                                    'label'   => __('Font Subset', 'favpress-demo-plugin'),
                                    'items'   => array(
                                        'data' => array(
                                            array(
                                                'source' => 'binding',
                                                'field'  => 'dep_font_face',
                                                'value'  => 'favpress_get_gwf_subset',
                                            ),
                                        ),
                                    ),
                                    'default' => 'latin'
                                ),
                            ),
                        ),
                        array(
                            'type'   => 'section',
                            'title'  => __('Single Field dependency', 'favpress-demo-plugin'),
                            'name'   => 'section_single_field_deps',
                            'fields' => array(
                                array(
                                    'type'        => 'toggle',
                                    'name'        => 'use_custom_logo',
                                    'label'       => __('Use Custom Logo', 'favpress-demo-plugin'),
                                    'description' => __('Use custom logo or not', 'favpress-demo-plugin'),
                                ),
                                array(
                                    'type'        => 'upload',
                                    'name'        => 'custom_logo',
                                    'label'       => __('Custom Logo', 'favpress-demo-plugin'),
                                    'dependency'  => array(
                                        'field'    => 'use_custom_logo',
                                        'function' => 'favpress_dep_boolean',
                                    ),
                                    'description' => __('Upload or choose custom logo', 'favpress-demo-plugin'),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        array(
            'title'    => __('Advanced Usage', 'favpress-demo-plugin'),
            'name'     => 'menu_adv',
            'icon'     => 'font-awesome:fa-cogs',
            'controls' => array(
                array(
                    'type'   => 'section',
                    'title'  => __('Typography with Preview', 'favpress-demo-plugin'),
                    'fields' => array(
                        array(
                            'type'    => 'html',
                            'name'    => 'logo_font_preview',
                            'binding' => array(
                                'field'    => 'logo_font_face,logo_font_style,logo_font_weight,logo_font_size, logo_line_height',
                                'function' => 'favpress_font_preview',
                            ),
                        ),
                        array(
                            'type'    => 'select',
                            'name'    => 'logo_font_face',
                            'label'   => __('Logo Font Face', 'favpress-demo-plugin'),
                            'items'   => array(
                                'data' => array(
                                    array(
                                        'source' => 'function',
                                        'value'  => 'favpress_get_gwf_family',
                                    ),
                                ),
                            ),
                            'default' => '{{first}}'
                        ),
                        array(
                            'type'    => 'radiobutton',
                            'name'    => 'logo_font_style',
                            'label'   => __('Logo Font Style', 'favpress-demo-plugin'),
                            'items'   => array(
                                'data' => array(
                                    array(
                                        'source' => 'binding',
                                        'field'  => 'logo_font_face',
                                        'value'  => 'favpress_get_gwf_style',
                                    ),
                                ),
                            ),
                            'default' => array(
                                '{{first}}',
                            ),
                        ),
                        array(
                            'type'  => 'radiobutton',
                            'name'  => 'logo_font_weight',
                            'label' => __('Logo Font Weight', 'favpress-demo-plugin'),
                            'items' => array(
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
                            'type'    => 'multiselect',
                            'name'    => 'logo_font_subset',
                            'label'   => __('Logo Font Subset', 'favpress-demo-plugin'),
                            'items'   => array(
                                'data' => array(
                                    array(
                                        'source' => 'binding',
                                        'field'  => 'logo_font_face',
                                        'value'  => 'favpress_get_gwf_subset',
                                    ),
                                ),
                            ),
                            'default' => 'latin'
                        ),
                        array(
                            'type'    => 'slider',
                            'name'    => 'logo_font_size',
                            'label'   => __('Logo Font Size (px)', 'favpress-demo-plugin'),
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
        ),
        array(
            'name'     => 'notebox',
            'title'    => __('Notebox', 'favpress-demo-plugin'),
            'icon'     => 'font-awesome:fa-info-circle',
            'controls' => array(
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
                    'type'   => 'section',
                    'title'  => __('Notebox in a Section', 'favpress-demo-plugin'),
                    'name'   => 'section_notebox',
                    'fields' => array(
                        array(
                            'type'        => 'notebox',
                            'name'        => 'nb_6',
                            'label'       => __('Normal Announcement', 'favpress-demo-plugin'),
                            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                            'status'      => 'normal',
                        ),
                        array(
                            'type'        => 'notebox',
                            'name'        => 'nb_7',
                            'label'       => __('Info Announcement', 'favpress-demo-plugin'),
                            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                            'status'      => 'info',
                        ),
                        array(
                            'type'        => 'notebox',
                            'name'        => 'nb_8',
                            'label'       => __('Success Announcement', 'favpress-demo-plugin'),
                            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                            'status'      => 'success',
                        ),
                        array(
                            'type'        => 'notebox',
                            'name'        => 'nb_9',
                            'label'       => __('Warning Announcement', 'favpress-demo-plugin'),
                            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                            'status'      => 'warning',
                        ),
                        array(
                            'type'        => 'notebox',
                            'name'        => 'nb_10',
                            'label'       => __('Critical Announcement', 'favpress-demo-plugin'),
                            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                            'status'      => 'error',
                        ),
                    ),
                ),
                array(
                    'type'   => 'section',
                    'title'  => __('Notebox with Fields', 'favpress-demo-plugin'),
                    'name'   => 'section_notebox',
                    'fields' => array(
                        array(
                            'type'        => 'notebox',
                            'name'        => 'nb_11',
                            'label'       => __('Info Announcement', 'favpress-demo-plugin'),
                            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
                            'status'      => 'info',
                        ),
                        array(
                            'type'    => 'textbox',
                            'name'    => 'tb_6',
                            'label'   => __('Textbox', 'favpress-demo-plugin'),
                            'default' => '',
                        ),
                        array(
                            'type'    => 'textbox',
                            'name'    => 'tb_7',
                            'label'   => __('Textbox', 'favpress-demo-plugin'),
                            'default' => '',
                        ),
                    ),
                ),
            ),
        ),
    )
);

/**
 *EOF
 */
