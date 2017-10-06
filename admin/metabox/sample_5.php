<?php

return array(
    'id'       => 'page_builder',
    'types'    => array('post'),
    'title'    => __('FavPress Page Builder Sample', 'favpress-demo-plugin'),
    'priority' => 'high',
    'template' => array(
        array(
            'name'  => 'use_pb',
            'label' => 'Use Page Builder',
            'type'  => 'toggle',
        ),
        array(
            'type'       => 'group',
            'repeating'  => true,
            'sortable'   => true,
            'name'       => 'row',
            'title'      => __('Row', 'favpress-demo-plugin'),
            'fields'     => array(
                array(
                    'type'      => 'group',
                    'repeating' => true,
                    'sortable'  => true,
                    'name'      => 'column',
                    'title'     => __('Column', 'favpress-demo-plugin'),
                    'fields'    => array(
                        array(
                            'type'  => 'slider',
                            'name'  => 'grid',
                            'label' => __('Grid Length', 'favpress-demo-plugin'),
                            'min'   => 1,
                            'max'   => 12,
                        ),
                        array(
                            'type'                       => 'wpeditor',
                            'label'                      => __('Content', 'favpress-demo-plugin'),
                            'name'                       => 'content',
                            'use_external_plugins'       => 1,
                            'disabled_externals_plugins' => 'favpress_sc_button',
                            'disabled_internals_plugins' => '',
                            'validation'                 => 'required',
                        ),
                    ),
                ),
            ),
            'dependency' => array(
                'field'    => 'use_pb',
                'function' => 'favpress_dep_boolean'
            )
        ),
    ),
);

/**
 * EOF
 */
