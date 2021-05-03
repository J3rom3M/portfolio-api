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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/diploma' => [[['_route' => 'diploma', '_controller' => 'App\\Controller\\DiplomaController::index'], null, null, null, false, false, null]],
        '/api/posts' => [[['_route' => 'api_posts_get', '_controller' => 'App\\Controller\\PostController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/post' => [[['_route' => 'api_post_post', '_controller' => 'App\\Controller\\PostController::post'], null, ['POST' => 0], null, false, false, null]],
        '/api/profiles' => [[['_route' => 'api_profiles_get', '_controller' => 'App\\Controller\\ProfileController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/profile' => [[['_route' => 'api_profile_post', '_controller' => 'App\\Controller\\ProfileController::profile'], null, ['POST' => 0], null, false, false, null]],
        '/project' => [[['_route' => 'project', '_controller' => 'App\\Controller\\ProjectController::index'], null, null, null, false, false, null]],
        '/social' => [[['_route' => 'social', '_controller' => 'App\\Controller\\SocialController::index'], null, null, null, false, false, null]],
        '/api/technos' => [[['_route' => 'api_technos_get', '_controller' => 'App\\Controller\\TechnoController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/techno' => [[['_route' => 'api_techno_post', '_controller' => 'App\\Controller\\TechnoController::techno'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|p(?'
                        .'|ost/(?'
                            .'|([^/]++)(*:196)'
                            .'|(\\d+)(?'
                                .'|(*:212)'
                            .')'
                        .')'
                        .'|rofile/(?'
                            .'|([^/]++)(*:240)'
                            .'|(\\d+)(?'
                                .'|(*:256)'
                            .')'
                        .')'
                    .')'
                    .'|techno/(?'
                        .'|([^/]++)(*:285)'
                        .'|(\\d+)(?'
                            .'|(*:301)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'api_post_get_one', '_controller' => 'App\\Controller\\PostController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        212 => [
            [['_route' => 'api_post_put', '_controller' => 'App\\Controller\\PostController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        240 => [[['_route' => 'api_profile_get_one', '_controller' => 'App\\Controller\\ProfileController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [
            [['_route' => 'api_profile_put', '_controller' => 'App\\Controller\\ProfileController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        285 => [[['_route' => 'api_techno_get_one', '_controller' => 'App\\Controller\\TechnoController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        301 => [
            [['_route' => 'api_techno_put', '_controller' => 'App\\Controller\\TechnoController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_techno_delete', '_controller' => 'App\\Controller\\TechnoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
