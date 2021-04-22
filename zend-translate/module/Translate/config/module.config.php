<?php


return array(
    'controllers' => array(
        'invokables' => array(
            'Translate\Controller\Translate' => 'Translate\Controller\TranslateController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'translate' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/translate[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Translate\Controller\Translate',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'translate' => __DIR__ . '/../view',
        ),
    ),
);