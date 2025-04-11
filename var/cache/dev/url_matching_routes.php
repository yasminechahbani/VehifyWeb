<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|mploye/(?'
                        .'|([^/]++)(?'
                            .'|(*:228)'
                            .'|/edit(*:241)'
                            .'|(*:249)'
                        .')'
                        .'|show(*:262)'
                    .')'
                    .'|quipement/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:340)'
                    .'|/edit(?'
                        .'|(*:356)'
                        .'|Profile(*:371)'
                    .')'
                .')'
                .'|/deleteAccount/([^/]++)(*:404)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        228 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['idEmploye'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['idEmploye'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        249 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['idEmploye'], ['POST' => 0], null, false, true, null]],
        262 => [[['_route' => 'app_datatables', '_controller' => 'App\\Controller\\HomeController::datatables'], [], null, null, false, false, null]],
        292 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['idEquipement'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['idEquipement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['idEquipement'], ['POST' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        356 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'app_user_editProfile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        404 => [
            [['_route' => 'app_user_deleteUserByhimSelf', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
