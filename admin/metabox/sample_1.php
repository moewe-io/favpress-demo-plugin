<?php

return array(
    'id'       => 'favpress_meta_sample_1',
    'types'    => array('post'),
    'title'    => __('FavPress Dependent Fields and Group', 'favpress-demo-plugin'),
    'priority' => 'high',
    'template' => array(
        array(
            'type'        => 'toggle',
            'name'        => 'toggle_filtering',
            'label'       => __('Use Filtering', 'favpress-demo-plugin'),
            'description' => __('Checking this will show filtering option group.', 'favpress-demo-plugin'),
        ),
        array(
            'type'       => 'group',
            'repeating'  => false,
            'length'     => 1,
            'name'       => 'filtering_group',
            'title'      => __('Filtering', 'favpress-demo-plugin'),
            'dependency' => array(
                'field'    => 'toggle_filtering',
                'function' => 'favpress_dep_boolean',
            ),
            'fields'     => array(
                array(
                    'type'        => 'radiobutton',
                    'name'        => 'filter_type',
                    'label'       => __('Filter By', 'favpress-demo-plugin'),
                    'description' => __('Different type will show different type of field', 'favpress-demo-plugin'),
                    'items'       => array(
                        array(
                            'value' => 'keyword',
                            'label' => __('Keyword', 'favpress-demo-plugin'),
                        ),
                        array(
                            'value' => 'tags',
                            'label' => __('Tags', 'favpress-demo-plugin'),
                        ),
                    ),
                ),
                array(
                    'type'        => 'textbox',
                    'name'        => 'filter_keyword',
                    'label'       => __('Keyword', 'favpress-demo-plugin'),
                    'description' => __('Keyword to filter.', 'favpress-demo-plugin'),
                    'default'     => 'abcdefg',
                    'dependency'  => array(
                        'field'    => 'filter_type',
                        'function' => 'favpress_dep_is_keyword',
                    ),
                ),
                array(
                    'type'        => 'multiselect',
                    'name'        => 'filter_tags',
                    'label'       => __('Choose Tag(s)', 'favpress-demo-plugin'),
                    'description' => __('Tag(s) to filter.', 'favpress-demo-plugin'),
                    'items'       => array(
                        'data' => array(
                            array(
                                'source' => 'function',
                                'value'  => 'favpress_get_tags',
                            ),
                        ),
                    ),
                    'dependency'  => array(
                        'field'    => 'filter_type',
                        'function' => 'favpress_dep_is_tags',
                    ),
                ),
            ),
        ),
    ),
);

/**
 * EOF
 */
