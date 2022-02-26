<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/course' => [[['_route' => 'course', '_controller' => 'App\\Controller\\CourseController::course'], null, null, null, false, false, null]],
        '/listC' => [[['_route' => 'listCourse', '_controller' => 'App\\Controller\\CourseController::listCourse'], null, null, null, false, false, null]],
        '/subjectRegister' => [[['_route' => 'subjectRegister', '_controller' => 'App\\Controller\\CourseController::subjectRegister'], null, null, null, false, false, null]],
        '/listSubject' => [[['_route' => 'listSubject', '_controller' => 'App\\Controller\\CourseController::listSubject'], null, null, null, false, false, null]],
        '/panel' => [[['_route' => 'panel', '_controller' => 'App\\Controller\\PanelController::panel'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistroController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\RegistroController::login'], null, null, null, false, false, null]],
        '/login_manually' => [[['_route' => 'loginManually', '_controller' => 'App\\Controller\\RegistroController::loginManually'], null, null, null, false, false, null]],
        '/register_manually' => [[['_route' => 'registerManually', '_controller' => 'App\\Controller\\RegistroController::registerManually'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\RegistroController::home'], null, null, null, false, false, null]],
        '/api/subjects' => [[['_route' => 'get_all_subjects', '_controller' => 'App\\Controller\\SubjectController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/subject' => [[['_route' => 'add_subject', '_controller' => 'App\\Controller\\SubjectController::add'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/subject/([^/]++)(?'
                    .'|(*:31)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:67)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [
            [['_route' => 'delete_subject', '_controller' => 'App\\Controller\\SubjectController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'update_subject', '_controller' => 'App\\Controller\\SubjectController::update'], ['id'], ['PUT' => 0], null, false, true, null],
        ],
        67 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
