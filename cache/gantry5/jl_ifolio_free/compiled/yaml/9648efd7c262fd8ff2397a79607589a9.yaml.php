<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Joomla/templates/jl_ifolio_free/blueprints/styles/blog.yaml',
    'modified' => 1491757134,
    'data' => [
        'name' => 'Blog Styles',
        'description' => 'Blog section content styles for the iFolio theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f5f7f8'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#242526'
                ]
            ]
        ]
    ]
];
