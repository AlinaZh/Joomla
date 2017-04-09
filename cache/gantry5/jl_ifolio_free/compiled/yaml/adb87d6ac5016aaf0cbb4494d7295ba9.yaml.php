<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/Joomla/templates/jl_ifolio_free/custom/config/menu/mainmenu.yaml',
    'modified' => 1491575690,
    'data' => [
        'ordering' => [
            'home' => '',
            'about' => '',
            'novosti' => '',
            'video' => '',
            'vse-stati' => [
                '__particle-vHRlp' => ''
            ],
            'kontakty' => '',
            'author-login' => '',
            '__module-aJMQf' => ''
        ],
        'items' => [
            'home' => [
                'id' => 101,
                'dropdown_dir' => 'right',
                'dropdown_hide' => '0',
                'width' => 'auto'
            ],
            'about' => [
                'id' => 108
            ],
            'author-login' => [
                'id' => 115
            ],
            'novosti' => [
                'id' => 122
            ],
            'video' => [
                'id' => 123
            ],
            'vse-stati' => [
                'id' => 124,
                'columns' => [
                    0 => 100
                ]
            ],
            'kontakty' => [
                'id' => 125
            ],
            'vse-stati/__particle-vHRlp' => [
                'type' => 'particle',
                'particle' => 'menu',
                'title' => 'Menu',
                'options' => [
                    'particle' => [
                        'enabled' => '1',
                        'menu' => 'blog',
                        'base' => '/',
                        'startLevel' => '1',
                        'maxLevels' => '0',
                        'renderTitles' => '0',
                        'hoverExpand' => '1',
                        'mobileTarget' => '0'
                    ],
                    'block' => [
                        'class' => 'g-sublevel',
                        'extra' => [
                            
                        ]
                    ]
                ],
                'enabled' => true,
                'anchor_class' => ''
            ],
            '__module-aJMQf' => [
                'type' => 'particle',
                'particle' => 'module',
                'title' => 'Search',
                'options' => [
                    'particle' => [
                        'enabled' => '1',
                        'module_id' => '87',
                        'chrome' => ''
                    ],
                    'block' => [
                        'extra' => [
                            
                        ]
                    ]
                ],
                'enabled' => '1'
            ]
        ]
    ]
];
