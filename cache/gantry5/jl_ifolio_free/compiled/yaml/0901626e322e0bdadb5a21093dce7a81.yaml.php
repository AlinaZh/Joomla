<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\xampp\\htdocs\\Joomla/templates/jl_ifolio_free/blueprints/styles/base.yaml',
    'modified' => 1491757134,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base styles for the iFolio theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background',
                    'default' => '#f5f7f8'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#242526'
                ]
            ]
        ]
    ]
];
