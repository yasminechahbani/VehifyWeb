<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/equipement' => [[['_route' => 'app_equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/equipement/new' => [[['_route' => 'app_equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connect' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_Admin', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/components/avatars' => [[['_route' => 'app_avatars', '_controller' => 'App\\Controller\\HomeController::avatarsComponent'], null, null, null, false, false, null]],
        '/forms/forms' => [[['_route' => 'app_forms', '_controller' => 'App\\Controller\\HomeController::forms'], null, null, null, false, false, null]],
        '/user/afficher' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/welcomePage/verifierCompute' => [[['_route' => 'app_user_verifier', '_controller' => 'App\\Controller\\UserController::verifier'], null, null, null, false, false, null]],
        '/sendEmail' => [[['_route' => 'app_user_sendEmail', '_controller' => 'App\\Controller\\UserController::sendEmail'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_user_logout', '_controller' => 'App\\Controller\\UserController::bro'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/detectface' => [[['_route' => 'app_detect_face', '_controller' => 'App\\Controller\\UserController::detectFace'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\userHomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\userHomeController::about'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\userHomeController::services'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\userHomeController::contact'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|mploye/(?'
                        .'|([^/]++)(?'
                            .'|(*:33)'
                            .'|/edit(*:45)'
                            .'|(*:52)'
                        .')'
                        .'|show(*:64)'
                    .')'
                    .'|quipement/([^/]++)(?'
                        .'|(*:93)'
                        .'|/edit(*:105)'
                        .'|(*:113)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:140)'
                    .'|/edit(?'
                        .'|(*:156)'
                        .'|Profile(*:171)'
                    .')'
                .')'
                .'|/deleteAccount/([^/]++)(*:204)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['idEmploye'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['idEmploye'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['idEmploye'], ['POST' => 0], null, false, true, null]],
        64 => [[['_route' => 'app_datatables', '_controller' => 'App\\Controller\\HomeController::datatables'], [], null, null, false, false, null]],
        93 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['idEquipement'], ['GET' => 0], null, false, true, null]],
        105 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['idEquipement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        113 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['idEquipement'], ['POST' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        171 => [[['_route' => 'app_user_editProfile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [
            [['_route' => 'app_user_deleteUserByhimSelf', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
