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
        '/account' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/account/entreprise/profil' => [[['_route' => 'app_entreprise_profil', '_controller' => 'App\\Controller\\EntrepriseProfilController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/offre-emploi' => [[['_route' => 'app_offre_emploi', '_controller' => 'App\\Controller\\HomeController::offreEmploi'], null, null, null, false, false, null]],
        '/entreprises' => [[['_route' => 'app_entreprises', '_controller' => 'App\\Controller\\HomeController::entreprises'], null, null, null, false, false, null]],
        '/account/offer' => [[['_route' => 'app_offer', '_controller' => 'App\\Controller\\OfferController::index'], null, null, null, false, false, null]],
        '/account/entreprise/offer/new' => [[['_route' => 'app_offer_create', '_controller' => 'App\\Controller\\OfferController::createNewOffer'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/account/tag' => [[['_route' => 'app_tag', '_controller' => 'App\\Controller\\TagController::index'], null, null, null, false, false, null]],
        '/account/user/profil' => [[['_route' => 'app_user_profil', '_controller' => 'App\\Controller\\UserProfilController::index'], null, null, null, false, false, null]],
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
                .'|/account/(?'
                    .'|entreprise/(?'
                        .'|profil/([^/]++)(?'
                            .'|(*:246)'
                            .'|/(?'
                                .'|edit(*:262)'
                                .'|delete(*:276)'
                            .')'
                        .')'
                        .'|offer/(?'
                            .'|show/([^/]++)(*:308)'
                            .'|delete/([^/]++)(*:331)'
                            .'|edit/([^/]++)(*:352)'
                            .'|([^/]++)/candidate/([^/]++)(*:387)'
                        .')'
                    .')'
                    .'|user/profil/([^/]++)(?'
                        .'|(*:420)'
                        .'|/(?'
                            .'|edit(*:436)'
                            .'|delete(*:450)'
                        .')'
                    .')'
                .')'
                .'|/offre\\-emploi/([^/]++)(*:484)'
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
        246 => [[['_route' => 'app_entreprise_profil_show', '_controller' => 'App\\Controller\\EntrepriseProfilController::show'], ['slug'], null, null, false, true, null]],
        262 => [[['_route' => 'app_entreprise_profil_edit', '_controller' => 'App\\Controller\\EntrepriseProfilController::editEntrepriseProfil'], ['slug'], null, null, false, false, null]],
        276 => [[['_route' => 'app_entreprise_profil_delete', '_controller' => 'App\\Controller\\EntrepriseProfilController::deleteEntrepriseProfil'], ['slug'], null, null, false, false, null]],
        308 => [[['_route' => 'app_offer_show', '_controller' => 'App\\Controller\\OfferController::show'], ['slug'], null, null, false, true, null]],
        331 => [[['_route' => 'app_offer_delete', '_controller' => 'App\\Controller\\OfferController::delete'], ['slug'], null, null, false, true, null]],
        352 => [[['_route' => 'app_offer_edit', '_controller' => 'App\\Controller\\OfferController::edit'], ['slug'], null, null, false, true, null]],
        387 => [[['_route' => 'app_offer_candidate', '_controller' => 'App\\Controller\\OfferController::getCandidate'], ['slug', 'id'], null, null, false, true, null]],
        420 => [[['_route' => 'app_user_profil_show', '_controller' => 'App\\Controller\\UserProfilController::show'], ['slug'], null, null, false, true, null]],
        436 => [[['_route' => 'app_user_profil_edit', '_controller' => 'App\\Controller\\UserProfilController::editUserProfil'], ['slug'], null, null, true, false, null]],
        450 => [[['_route' => 'app_user_profil_delete', '_controller' => 'App\\Controller\\UserProfilController::deleteUserProfil'], ['slug'], null, null, false, false, null]],
        484 => [
            [['_route' => 'app_offre_emploi_show', '_controller' => 'App\\Controller\\HomeController::offreEmploiShow'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
