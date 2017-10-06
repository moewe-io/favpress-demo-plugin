<?php

return array(
    'id'       => 'favpress_meta_sample_6',
    'types'    => array('post'),
    'title'    => __('FavPress Fixed Group With Item Bindings Fields', 'favpress-demo-plugin'),
    'priority' => 'high',
    'template' => array(
        array(
            'type'      => 'group',
            'repeating' => false,
            'length'    => 2,
            'name'      => 'binding_group',
            'title'     => __('Location', 'favpress-demo-plugin'),
            'fields'    => array(
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
);

/**
 * EOF
 */
