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
        '/calendrier' => [[['_route' => 'app_calendrier', '_controller' => 'App\\Controller\\CalendrierController::index'], null, null, null, false, false, null]],
        '/calendrier/events' => [[['_route' => 'app_calendrier_events', '_controller' => 'App\\Controller\\CalendrierController::getEvents'], null, ['GET' => 0], null, false, false, null]],
        '/carte/grise' => [[['_route' => 'app_carte_grise_index', '_controller' => 'App\\Controller\\CarteGriseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/carte/grise/new' => [[['_route' => 'app_carte_grise_new', '_controller' => 'App\\Controller\\CarteGriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe/employe/search' => [[['_route' => 'employe_search_nom', '_controller' => 'App\\Controller\\EmployeController::search'], null, ['GET' => 0], null, false, false, null]],
        '/employeeFront/front' => [[['_route' => 'app_employe_front', '_controller' => 'App\\Controller\\EmployeFrontController::index'], null, null, null, false, false, null]],
        '/equipement' => [[['_route' => 'app_equipement_index', '_controller' => 'App\\Controller\\EquipementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/equipement/new' => [[['_route' => 'app_equipement_new', '_controller' => 'App\\Controller\\EquipementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, true, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connect' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_Admin', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/components/avatars' => [[['_route' => 'app_avatars', '_controller' => 'App\\Controller\\HomeController::avatarsComponent'], null, null, null, false, false, null]],
        '/forms/forms' => [[['_route' => 'app_forms', '_controller' => 'App\\Controller\\HomeController::forms'], null, null, null, false, false, null]],
        '/dashboard/liste' => [[['_route' => 'app_liste', '_controller' => 'App\\Controller\\HomeController::afficherVehicule'], null, null, null, false, false, null]],
        '/dashboard/ajout/vehicule' => [[['_route' => 'app_vehicule_add', '_controller' => 'App\\Controller\\HomeController::addVehicule'], null, null, null, false, false, null]],
        '/dashboard/ajout/carte-grise' => [[['_route' => 'app_carte_grise_add', '_controller' => 'App\\Controller\\HomeController::addCarteGrise'], null, null, null, false, false, null]],
        '/paiement' => [[['_route' => 'app_paiement_index', '_controller' => 'App\\Controller\\PaiementController::index'], null, ['GET' => 0], null, false, false, null]],
        '/paiement/new' => [[['_route' => 'app_paiement_new', '_controller' => 'App\\Controller\\PaiementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Quiz/newPermis' => [[['_route' => 'app_new_permis', '_controller' => 'App\\Controller\\QuizController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/Quiz/quiz/generate' => [[['_route' => 'app_quiz_generate', '_controller' => 'App\\Controller\\QuizController::generate'], null, ['GET' => 0], null, false, false, null]],
        '/Quiz/quiz/submit' => [[['_route' => 'app_quiz_submit', '_controller' => 'App\\Controller\\QuizController::submit'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/resultat' => [[['_route' => 'app_resultat_index', '_controller' => 'App\\Controller\\ResultatController::index'], null, null, null, true, false, null]],
        '/serve' => [[['_route' => 'app_serve_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/serve/new' => [[['_route' => 'app_serve_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stripe' => [[['_route' => 'app_stripe', '_controller' => 'App\\Controller\\StripeController::index'], null, null, null, false, false, null]],
        '/stripe/create-charge' => [[['_route' => 'app_stripe_charge', '_controller' => 'App\\Controller\\StripeController::createCharge'], null, ['POST' => 0], null, false, false, null]],
        '/user/afficher' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/welcomePage/verifierCompute' => [[['_route' => 'app_user_verifier', '_controller' => 'App\\Controller\\UserController::verifier'], null, null, null, false, false, null]],
        '/sendEmail' => [[['_route' => 'app_user_sendEmail', '_controller' => 'App\\Controller\\UserController::sendEmail'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'app_user_logout', '_controller' => 'App\\Controller\\UserController::bro'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/detectface' => [[['_route' => 'app_detect_face', '_controller' => 'App\\Controller\\UserController::detectFace'], null, null, null, false, false, null]],
        '/vehicule' => [[['_route' => 'app_vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/vehicule/new' => [[['_route' => 'app_vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/verif' => [[['_route' => 'app_verif', '_controller' => 'App\\Controller\\VisiteController::index'], null, null, null, false, false, null]],
        '/verif/submit' => [[['_route' => 'app_verif_submit', '_controller' => 'App\\Controller\\VisiteController::submit'], null, ['POST' => 0], null, false, false, null]],
        '/services' => [
            [['_route' => 'app_serviceFClient', '_controller' => 'App\\Controller\\VisiteController::services'], null, null, null, false, false, null],
            [['_route' => 'app_services', '_controller' => 'App\\Controller\\userHomeController::services'], null, null, null, false, false, null],
        ],
        '/verif/vin' => [[['_route' => 'app_verif_vin', '_controller' => 'App\\Controller\\VisiteController::vinForm'], null, null, null, false, false, null]],
        '/verif/check-vin' => [[['_route' => 'app_verif_check_vin', '_controller' => 'App\\Controller\\VisiteController::checkVin'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\userHomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\userHomeController::about'], null, null, null, false, false, null]],
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
                .'|/carte/grise/([^/]++)(?'
                    .'|(*:226)'
                    .'|/(?'
                        .'|edit(*:242)'
                        .'|delete(*:256)'
                    .')'
                .')'
                .'|/e(?'
                    .'|mploye/(?'
                        .'|([^/]++)(?'
                            .'|(*:292)'
                            .'|/edit(*:305)'
                            .'|(*:313)'
                        .')'
                        .'|show(*:326)'
                    .')'
                    .'|quipement/([^/]++)(?'
                        .'|(*:356)'
                        .'|/edit(*:369)'
                        .'|(*:377)'
                    .')'
                .')'
                .'|/facture/(?'
                    .'|([^/]++)(?'
                        .'|(*:410)'
                        .'|/edit(*:423)'
                        .'|(*:431)'
                    .')'
                    .'|reservation/([^/]++)(*:460)'
                    .'|([^/]++)/pdf(*:480)'
                .')'
                .'|/d(?'
                    .'|ashboard/liste/(?'
                        .'|vehicule/(?'
                            .'|([^/]++)(*:532)'
                            .'|delete/([^/]++)(*:555)'
                            .'|edit/([^/]++)(*:576)'
                        .')'
                        .'|carte\\-grise/(?'
                            .'|([^/]++)(*:609)'
                            .'|delete/([^/]++)(*:632)'
                            .'|edit/([^/]++)(*:653)'
                        .')'
                    .')'
                    .'|eleteAccount/([^/]++)(*:684)'
                .')'
                .'|/paiement/([^/]++)(?'
                    .'|(*:714)'
                    .'|/edit(*:727)'
                    .'|(*:735)'
                .')'
                .'|/Quiz/(?'
                    .'|([^/]++)(?'
                        .'|(*:764)'
                        .'|/edit(*:777)'
                        .'|(*:785)'
                    .')'
                    .'|quiz/r(?'
                        .'|esult/([^/]++)(*:817)'
                        .'|ate/([^/]++)(*:837)'
                    .')'
                    .'|check\\-user\\-quiz/([^/]++)(*:872)'
                .')'
                .'|/res(?'
                    .'|ervation/(?'
                        .'|new(?:/([^/]++))?(*:917)'
                        .'|([^/]++)(?'
                            .'|(*:936)'
                            .'|/edit(*:949)'
                            .'|(*:957)'
                        .')'
                    .')'
                    .'|ultat/([^/]++)(*:981)'
                .')'
                .'|/s(?'
                    .'|erve/([^/]++)(?'
                        .'|(*:1011)'
                        .'|/edit(*:1025)'
                        .'|(*:1034)'
                    .')'
                    .'|tripe/payment/([^/]++)(*:1066)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1093)'
                    .'|/edit(?'
                        .'|(*:1110)'
                        .'|Profile(*:1126)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:1158)'
                    .'|/edit(*:1172)'
                    .'|(*:1181)'
                .')'
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
        226 => [[['_route' => 'app_carte_grise_show', '_controller' => 'App\\Controller\\CarteGriseController::show'], ['id_carte_grise'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_carte_grise_edit', '_controller' => 'App\\Controller\\CarteGriseController::edit'], ['idCarteGrise'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        256 => [[['_route' => 'app_carte_grise_delete', '_controller' => 'App\\Controller\\CarteGriseController::delete'], ['id_carte_grise'], ['POST' => 0], null, false, false, null]],
        292 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['idEmploye'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['idEmploye'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['idEmploye'], ['POST' => 0], null, false, true, null]],
        326 => [[['_route' => 'app_datatables', '_controller' => 'App\\Controller\\HomeController::datatables'], [], null, null, false, false, null]],
        356 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['idEquipement'], ['GET' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['idEquipement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        377 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['idEquipement'], ['POST' => 0], null, false, true, null]],
        410 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        431 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        460 => [[['_route' => 'app_facture_by_reservation', '_controller' => 'App\\Controller\\FactureController::showByReservation'], ['id'], ['GET' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_facture_pdf', '_controller' => 'App\\Controller\\FactureController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        532 => [[['_route' => 'app_vehiculeB_show', '_controller' => 'App\\Controller\\HomeController::show'], ['idVehicule'], null, null, false, true, null]],
        555 => [[['_route' => 'app_vehiculeB_delete', '_controller' => 'App\\Controller\\HomeController::deleteVehicule'], ['idVehicule'], ['POST' => 0], null, false, true, null]],
        576 => [[['_route' => 'app_vehiculeB_edit', '_controller' => 'App\\Controller\\HomeController::editVehicule'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        609 => [[['_route' => 'app_carte_griseB_show', '_controller' => 'App\\Controller\\HomeController::show1'], ['idCarteGrise'], null, null, false, true, null]],
        632 => [[['_route' => 'app_carte_griseB_delete', '_controller' => 'App\\Controller\\HomeController::deleteCarteGrise'], ['idCarteGrise'], ['POST' => 0], null, false, true, null]],
        653 => [[['_route' => 'app_carte_griseB_edit', '_controller' => 'App\\Controller\\HomeController::editCarteGrise'], ['idCarteGrise'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        684 => [[['_route' => 'app_user_deleteUserByhimSelf', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        714 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        727 => [[['_route' => 'app_paiement_edit', '_controller' => 'App\\Controller\\PaiementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        735 => [[['_route' => 'app_paiement_delete', '_controller' => 'App\\Controller\\PaiementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        764 => [[['_route' => 'app_show_permisOne', '_controller' => 'App\\Controller\\QuizController::show'], ['id_permis'], ['GET' => 0], null, false, true, null]],
        777 => [[['_route' => 'app_edit_permisOne', '_controller' => 'App\\Controller\\QuizController::edit'], ['id_permis'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        785 => [[['_route' => 'app_delete_permis2', '_controller' => 'App\\Controller\\QuizController::delete'], ['id_permis'], ['POST' => 0], null, false, true, null]],
        817 => [[['_route' => 'app_quiz_result', '_controller' => 'App\\Controller\\QuizController::result'], ['id'], ['GET' => 0], null, false, true, null]],
        837 => [[['_route' => 'app_quiz_rate', '_controller' => 'App\\Controller\\QuizController::rate'], ['id'], ['POST' => 0], null, false, true, null]],
        872 => [[['_route' => 'app_quiz_check_status', '_controller' => 'App\\Controller\\QuizController::checkQuizStatus'], ['userId'], ['GET' => 0], null, false, true, null]],
        917 => [[['_route' => 'app_reservation_new', 'service_id' => null, '_controller' => 'App\\Controller\\ReservationController::new'], ['service_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        936 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id_reservation'], ['GET' => 0], null, false, true, null]],
        949 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        957 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        981 => [[['_route' => 'app_resultat_show', '_controller' => 'App\\Controller\\ResultatController::show'], ['id_resultat'], null, null, false, true, null]],
        1011 => [[['_route' => 'app_serve_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id_service'], ['GET' => 0], null, false, true, null]],
        1025 => [[['_route' => 'app_serve_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id_service'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1034 => [[['_route' => 'app_serve_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id_service'], ['POST' => 0], null, false, true, null]],
        1066 => [[['_route' => 'app_stripe_payment', '_controller' => 'App\\Controller\\StripeController::payment'], ['reservation_id'], null, null, false, true, null]],
        1093 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1110 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1126 => [[['_route' => 'app_user_editProfile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1158 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idVehicule'], ['GET' => 0], null, false, true, null]],
        1172 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1181 => [
            [['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idVehicule'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
