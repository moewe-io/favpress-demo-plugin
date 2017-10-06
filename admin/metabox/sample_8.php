<?php

return array(
    'id'       => 'favpress_meta_sample_8',
    'types'    => array('post'),
    'title'    => __('FavPress Metabox on The Sidebar', 'favpress-demo-plugin'),
    'priority' => 'high',
    'context'  => 'side',
    'template' => array(

        array(
            'type'        => 'notebox',
            'name'        => 'notebox',
            'label'       => __('Normal Announcement', 'favpress-demo-plugin'),
            'description' => __('Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'favpress-demo-plugin'),
            'status'      => 'normal',
        ),
        array(
            'type'        => 'textbox',
            'name'        => 'textbox',
            'label'       => __('Textbox Field', 'favpress-demo-plugin'),
            'description' => __('Lorem ipsum dolor sit amet', 'favpress-demo-plugin'),
        ),
        array(
            'type'  => 'checkbox',
            'name'  => 'checkbox',
            'label' => __('Checkbox Field', 'favpress-demo-plugin'),
            'items' => array(
                array(
                    'value' => 'item-1',
                    'label' => 'item-1',
                ),
                array(
                    'value' => 'item-2',
                    'label' => 'item-2',
                ),
                array(
                    'value' => 'item-3',
                    'label' => 'item-3',
                ),
                array(
                    'value' => 'item-4',
                    'label' => 'item-4',
                ),
            ),
        ),
        array(
            'type'  => 'radiobutton',
            'name'  => 'radiobutton',
            'label' => __('Radiobutton Field', 'favpress-demo-plugin'),
            'items' => array(
                array(
                    'value' => 'item-1',
                    'label' => 'item-1',
                ),
                array(
                    'value' => 'item-2',
                    'label' => 'item-2',
                ),
                array(
                    'value' => 'item-3',
                    'label' => 'item-3',
                ),
                array(
                    'value' => 'item-4',
                    'label' => 'item-4',
                ),
            ),
        ),
        array(
            'type'  => 'select',
            'name'  => 'select',
            'label' => __('Select Field', 'favpress-demo-plugin'),
            'items' => array(
                array(
                    'value' => 'item-1',
                    'label' => 'item-1',
                ),
                array(
                    'value' => 'item-2',
                    'label' => 'item-2',
                ),
                array(
                    'value' => 'item-3',
                    'label' => 'item-3',
                ),
                array(
                    'value' => 'item-4',
                    'label' => 'item-4',
                ),
            ),
        ),
        array(
            'type'      => 'group',
            'repeating' => false,
            'length'    => 1,
            'name'      => 'group',
            'title'     => __('Group', 'favpress-demo-plugin'),
            'fields'    => array(
                array(
                    'type'  => 'textbox',
                    'name'  => 'gr_textbox',
                    'label' => __('Textbox Field', 'favpress-demo-plugin'),
                ),
                array(
                    'type'  => 'textarea',
                    'name'  => 'gr_textarea',
                    'label' => __('Textarea Field', 'favpress-demo-plugin'),
                ),
            ),
        ),
    ),
);

/**
 * EOF
 */
