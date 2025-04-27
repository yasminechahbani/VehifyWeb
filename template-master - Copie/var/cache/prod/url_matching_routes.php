<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/calendrier' => [[['_route' => 'app_calendrier', '_controller' => 'App\\Controller\\CalendrierController::index'], null, null, null, false, false, null]],
        '/calendrier/events' => [[['_route' => 'app_calendrier_events', '_controller' => 'App\\Controller\\CalendrierController::getEvents'], null, ['GET' => 0], null, false, false, null]],
        '/carte/grise' => [[['_route' => 'app_carte_grise_index', '_controller' => 'App\\Controller\\CarteGriseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/carte/grise/new' => [[['_route' => 'app_carte_grise_new', '_controller' => 'App\\Controller\\CarteGriseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe' => [[['_route' => 'app_employe_index', '_controller' => 'App\\Controller\\EmployeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/employe/new' => [[['_route' => 'app_employe_new', '_controller' => 'App\\Controller\\EmployeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe/employe/search' => [[['_route' => 'employe_search_nom', '_controller' => 'App\\Controller\\EmployeController::search'], null, ['GET' => 0], null, false, false, null]],
        '/employeeFront/front' => [[['_route' => 'app_employe_front', '_controller' => 'App\\Controller\\EmployeFrontController::index'], null, null, null, false, false, null]],
        '/employeeFront/pending-renewals' => [[['_route' => 'app_pending_renewals', '_controller' => 'App\\Controller\\EmployeFrontController::showPendingRenewals'], null, null, null, false, false, null]],
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
        '/Quiz/permis/renew' => [[['_route' => 'permis_request_renewal', '_controller' => 'App\\Controller\\QuizController::requestRenewal'], null, null, null, false, false, null]],
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
                .'|/carte/grise/([^/]++)(?'
                    .'|(*:31)'
                    .'|/(?'
                        .'|edit(*:46)'
                        .'|delete(*:59)'
                    .')'
                .')'
                .'|/e(?'
                    .'|mploye/(?'
                        .'|([^/]++)(?'
                            .'|(*:94)'
                            .'|/edit(*:106)'
                            .'|(*:114)'
                        .')'
                        .'|show(*:127)'
                    .')'
                    .'|quipement/([^/]++)(?'
                        .'|(*:157)'
                        .'|/edit(*:170)'
                        .'|(*:178)'
                    .')'
                .')'
                .'|/facture/(?'
                    .'|([^/]++)(?'
                        .'|(*:211)'
                        .'|/edit(*:224)'
                        .'|(*:232)'
                    .')'
                    .'|reservation/([^/]++)(*:261)'
                    .'|([^/]++)/pdf(*:281)'
                .')'
                .'|/d(?'
                    .'|ashboard/liste/(?'
                        .'|vehicule/(?'
                            .'|([^/]++)(*:333)'
                            .'|delete/([^/]++)(*:356)'
                            .'|edit/([^/]++)(*:377)'
                        .')'
                        .'|carte\\-grise/(?'
                            .'|([^/]++)(*:410)'
                            .'|delete/([^/]++)(*:433)'
                            .'|edit/([^/]++)(*:454)'
                        .')'
                    .')'
                    .'|eleteAccount/([^/]++)(*:485)'
                .')'
                .'|/paiement/([^/]++)(?'
                    .'|(*:515)'
                    .'|/edit(*:528)'
                    .'|(*:536)'
                .')'
                .'|/Quiz/(?'
                    .'|([^/]++)(?'
                        .'|(*:565)'
                        .'|/edit(*:578)'
                        .'|(*:586)'
                    .')'
                    .'|quiz/r(?'
                        .'|esult/([^/]++)(?'
                            .'|(*:621)'
                            .'|/download(*:638)'
                        .')'
                        .'|ate/([^/]++)(*:659)'
                    .')'
                    .'|check\\-(?'
                        .'|user\\-quiz/([^/]++)(*:697)'
                        .'|expired\\-permi(?'
                            .'|s(*:723)'
                            .'|ts\\-manual(*:741)'
                        .')'
                    .')'
                .')'
                .'|/res(?'
                    .'|ervation/(?'
                        .'|new(?:/([^/]++))?(*:788)'
                        .'|([^/]++)(?'
                            .'|(*:807)'
                            .'|/edit(*:820)'
                            .'|(*:828)'
                        .')'
                    .')'
                    .'|ultat/([^/]++)(*:852)'
                .')'
                .'|/s(?'
                    .'|erve/([^/]++)(?'
                        .'|(*:882)'
                        .'|/edit(*:895)'
                        .'|(*:903)'
                    .')'
                    .'|tripe/payment/([^/]++)(*:934)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:960)'
                    .'|/edit(?'
                        .'|(*:976)'
                        .'|Profile(*:991)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:1022)'
                    .'|/edit(*:1036)'
                    .'|(*:1045)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        31 => [[['_route' => 'app_carte_grise_show', '_controller' => 'App\\Controller\\CarteGriseController::show'], ['id_carte_grise'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_carte_grise_edit', '_controller' => 'App\\Controller\\CarteGriseController::edit'], ['idCarteGrise'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        59 => [[['_route' => 'app_carte_grise_delete', '_controller' => 'App\\Controller\\CarteGriseController::delete'], ['id_carte_grise'], ['POST' => 0], null, false, false, null]],
        94 => [[['_route' => 'app_employe_show', '_controller' => 'App\\Controller\\EmployeController::show'], ['idEmploye'], ['GET' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_employe_edit', '_controller' => 'App\\Controller\\EmployeController::edit'], ['idEmploye'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        114 => [[['_route' => 'app_employe_delete', '_controller' => 'App\\Controller\\EmployeController::delete'], ['idEmploye'], ['POST' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_datatables', '_controller' => 'App\\Controller\\HomeController::datatables'], [], null, null, false, false, null]],
        157 => [[['_route' => 'app_equipement_show', '_controller' => 'App\\Controller\\EquipementController::show'], ['idEquipement'], ['GET' => 0], null, false, true, null]],
        170 => [[['_route' => 'app_equipement_edit', '_controller' => 'App\\Controller\\EquipementController::edit'], ['idEquipement'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        178 => [[['_route' => 'app_equipement_delete', '_controller' => 'App\\Controller\\EquipementController::delete'], ['idEquipement'], ['POST' => 0], null, false, true, null]],
        211 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        261 => [[['_route' => 'app_facture_by_reservation', '_controller' => 'App\\Controller\\FactureController::showByReservation'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_facture_pdf', '_controller' => 'App\\Controller\\FactureController::generatePdf'], ['id'], ['GET' => 0], null, false, false, null]],
        333 => [[['_route' => 'app_vehiculeB_show', '_controller' => 'App\\Controller\\HomeController::show'], ['idVehicule'], null, null, false, true, null]],
        356 => [[['_route' => 'app_vehiculeB_delete', '_controller' => 'App\\Controller\\HomeController::deleteVehicule'], ['idVehicule'], ['POST' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_vehiculeB_edit', '_controller' => 'App\\Controller\\HomeController::editVehicule'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        410 => [[['_route' => 'app_carte_griseB_show', '_controller' => 'App\\Controller\\HomeController::show1'], ['idCarteGrise'], null, null, false, true, null]],
        433 => [[['_route' => 'app_carte_griseB_delete', '_controller' => 'App\\Controller\\HomeController::deleteCarteGrise'], ['idCarteGrise'], ['POST' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_carte_griseB_edit', '_controller' => 'App\\Controller\\HomeController::editCarteGrise'], ['idCarteGrise'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        485 => [[['_route' => 'app_user_deleteUserByhimSelf', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        515 => [[['_route' => 'app_paiement_show', '_controller' => 'App\\Controller\\PaiementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        528 => [[['_route' => 'app_paiement_edit', '_controller' => 'App\\Controller\\PaiementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        536 => [[['_route' => 'app_paiement_delete', '_controller' => 'App\\Controller\\PaiementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        565 => [[['_route' => 'app_show_permisOne', '_controller' => 'App\\Controller\\QuizController::show'], ['numeroPermis'], ['GET' => 0], null, false, true, null]],
        578 => [[['_route' => 'app_edit_permisOne', '_controller' => 'App\\Controller\\QuizController::edit'], ['numeroPermis'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        586 => [[['_route' => 'app_delete_permis2', '_controller' => 'App\\Controller\\QuizController::delete'], ['id_permis'], ['POST' => 0], null, false, true, null]],
        621 => [[['_route' => 'app_quiz_result', '_controller' => 'App\\Controller\\QuizController::result'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'app_quiz_result_download', '_controller' => 'App\\Controller\\QuizController::downloadResult'], ['id'], ['GET' => 0], null, false, false, null]],
        659 => [[['_route' => 'app_quiz_rate', '_controller' => 'App\\Controller\\QuizController::rate'], ['id'], ['POST' => 0], null, false, true, null]],
        697 => [[['_route' => 'app_quiz_check_status', '_controller' => 'App\\Controller\\QuizController::checkQuizStatus'], ['userId'], ['GET' => 0], null, false, true, null]],
        723 => [[['_route' => 'check_expired_permis', '_controller' => 'App\\Controller\\QuizController::checkExpiredPermis'], [], null, null, false, false, null]],
        741 => [[['_route' => 'app_check_expired_permits_manual', '_controller' => 'App\\Controller\\QuizController::checkExpiredPermitsManual'], [], null, null, false, false, null]],
        788 => [[['_route' => 'app_reservation_new', 'service_id' => null, '_controller' => 'App\\Controller\\ReservationController::new'], ['service_id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        807 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id_reservation'], ['GET' => 0], null, false, true, null]],
        820 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id_reservation'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        828 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id_reservation'], ['POST' => 0], null, false, true, null]],
        852 => [[['_route' => 'app_resultat_show', '_controller' => 'App\\Controller\\ResultatController::show'], ['id_resultat'], null, null, false, true, null]],
        882 => [[['_route' => 'app_serve_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id_service'], ['GET' => 0], null, false, true, null]],
        895 => [[['_route' => 'app_serve_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id_service'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        903 => [[['_route' => 'app_serve_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id_service'], ['POST' => 0], null, false, true, null]],
        934 => [[['_route' => 'app_stripe_payment', '_controller' => 'App\\Controller\\StripeController::payment'], ['reservation_id'], null, null, false, true, null]],
        960 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        976 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        991 => [[['_route' => 'app_user_editProfile', '_controller' => 'App\\Controller\\UserController::editProfile'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1022 => [[['_route' => 'app_vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['idVehicule'], ['GET' => 0], null, false, true, null]],
        1036 => [[['_route' => 'app_vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['idVehicule'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1045 => [
            [['_route' => 'app_vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['idVehicule'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
