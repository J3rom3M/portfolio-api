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
        '/api/diplomas' => [[['_route' => 'api_diplomas_get', '_controller' => 'App\\Controller\\DiplomaController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/diploma' => [[['_route' => 'api_diploma_post', '_controller' => 'App\\Controller\\DiplomaController::diploma'], null, ['POST' => 0], null, false, false, null]],
        '/api/posts' => [[['_route' => 'api_posts_get', '_controller' => 'App\\Controller\\PostController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/post' => [[['_route' => 'api_post_post', '_controller' => 'App\\Controller\\PostController::post'], null, ['POST' => 0], null, false, false, null]],
        '/api/profiles' => [[['_route' => 'api_profiles_get', '_controller' => 'App\\Controller\\ProfileController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/profile' => [[['_route' => 'api_profile_post', '_controller' => 'App\\Controller\\ProfileController::profile'], null, ['POST' => 0], null, false, false, null]],
        '/api/projects' => [[['_route' => 'api_projects_get', '_controller' => 'App\\Controller\\ProjectController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/project' => [[['_route' => 'api_project_post', '_controller' => 'App\\Controller\\ProjectController::project'], null, ['POST' => 0], null, false, false, null]],
        '/api/socials' => [[['_route' => 'api_socials_get', '_controller' => 'App\\Controller\\SocialController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/social' => [[['_route' => 'api_social_post', '_controller' => 'App\\Controller\\SocialController::social'], null, ['POST' => 0], null, false, false, null]],
        '/api/technos' => [[['_route' => 'api_technos_get', '_controller' => 'App\\Controller\\TechnoController::getAll'], null, ['GET' => 0], null, false, false, null]],
        '/api/techno' => [[['_route' => 'api_techno_post', '_controller' => 'App\\Controller\\TechnoController::techno'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
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
                    .'|diploma/(?'
                        .'|([^/]++)(*:196)'
                        .'|(\\d+)(?'
                            .'|(*:212)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|ost/(?'
                            .'|([^/]++)(*:241)'
                            .'|(\\d+)(?'
                                .'|(*:257)'
                            .')'
                        .')'
                        .'|ro(?'
                            .'|file/(?'
                                .'|([^/]++)(*:288)'
                                .'|(\\d+)(?'
                                    .'|(*:304)'
                                .')'
                            .')'
                            .'|ject/(?'
                                .'|([^/]++)(*:330)'
                                .'|(\\d+)(?'
                                    .'|(*:346)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|social/(?'
                        .'|([^/]++)(*:376)'
                        .'|(\\d+)(?'
                            .'|(*:392)'
                        .')'
                    .')'
                    .'|techno/(?'
                        .'|([^/]++)(*:420)'
                        .'|(\\d+)(?'
                            .'|(*:436)'
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
        196 => [[['_route' => 'api_diploma_get_one', '_controller' => 'App\\Controller\\DiplomaController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        212 => [
            [['_route' => 'api_diploma_put', '_controller' => 'App\\Controller\\DiplomaController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_diploma_delete', '_controller' => 'App\\Controller\\DiplomaController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        241 => [[['_route' => 'api_post_get_one', '_controller' => 'App\\Controller\\PostController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        257 => [
            [['_route' => 'api_post_put', '_controller' => 'App\\Controller\\PostController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_post_delete', '_controller' => 'App\\Controller\\PostController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        288 => [[['_route' => 'api_profile_get_one', '_controller' => 'App\\Controller\\ProfileController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [
            [['_route' => 'api_profile_put', '_controller' => 'App\\Controller\\ProfileController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        330 => [[['_route' => 'api_project_get_one', '_controller' => 'App\\Controller\\ProjectController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        346 => [
            [['_route' => 'api_project_put', '_controller' => 'App\\Controller\\ProjectController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_project_delete', '_controller' => 'App\\Controller\\ProjectController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        376 => [[['_route' => 'api_social_get_one', '_controller' => 'App\\Controller\\SocialController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        392 => [
            [['_route' => 'api_social_put', '_controller' => 'App\\Controller\\SocialController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_social_delete', '_controller' => 'App\\Controller\\SocialController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        420 => [[['_route' => 'api_techno_get_one', '_controller' => 'App\\Controller\\TechnoController::getOne'], ['id'], ['GET' => 0], null, false, true, null]],
        436 => [
            [['_route' => 'api_techno_put', '_controller' => 'App\\Controller\\TechnoController::putAndPatch'], ['id'], ['PUT' => 0, 'PATCH' => 1], null, false, true, null],
            [['_route' => 'api_techno_delete', '_controller' => 'App\\Controller\\TechnoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
