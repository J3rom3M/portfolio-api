<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'api_diplomas_get' => [[], ['_controller' => 'App\\Controller\\DiplomaController::getAll'], [], [['text', '/api/diplomas']], [], []],
    'api_diploma_get_one' => [['id'], ['_controller' => 'App\\Controller\\DiplomaController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/diploma']], [], []],
    'api_diploma_post' => [[], ['_controller' => 'App\\Controller\\DiplomaController::diploma'], [], [['text', '/api/diploma']], [], []],
    'api_diploma_put' => [['id'], ['_controller' => 'App\\Controller\\DiplomaController::putAndPatch'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/diploma']], [], []],
    'api_diploma_delete' => [['id'], ['_controller' => 'App\\Controller\\DiplomaController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/diploma']], [], []],
    'api_posts_get' => [[], ['_controller' => 'App\\Controller\\PostController::getAll'], [], [['text', '/api/posts']], [], []],
    'api_post_get_one' => [['id'], ['_controller' => 'App\\Controller\\PostController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/post']], [], []],
    'api_post_post' => [[], ['_controller' => 'App\\Controller\\PostController::post'], [], [['text', '/api/post']], [], []],
    'api_post_put' => [['id'], ['_controller' => 'App\\Controller\\PostController::putAndPatch'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/post']], [], []],
    'api_post_delete' => [['id'], ['_controller' => 'App\\Controller\\PostController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/post']], [], []],
    'api_profiles_get' => [[], ['_controller' => 'App\\Controller\\ProfileController::getAll'], [], [['text', '/api/profiles']], [], []],
    'api_profile_get_one' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/profile']], [], []],
    'api_profile_post' => [[], ['_controller' => 'App\\Controller\\ProfileController::profile'], [], [['text', '/api/profile']], [], []],
    'api_profile_put' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::putAndPatch'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/profile']], [], []],
    'api_profile_delete' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/profile']], [], []],
    'api_projects_get' => [[], ['_controller' => 'App\\Controller\\ProjectController::getAll'], [], [['text', '/api/projects']], [], []],
    'api_project_get_one' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/project']], [], []],
    'api_project_post' => [[], ['_controller' => 'App\\Controller\\ProjectController::project'], [], [['text', '/api/project']], [], []],
    'api_project_put' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::putAndPatch'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/project']], [], []],
    'api_project_delete' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/project']], [], []],
    'api_socials_get' => [[], ['_controller' => 'App\\Controller\\SocialController::getAll'], [], [['text', '/api/socials']], [], []],
    'api_social_get_one' => [['id'], ['_controller' => 'App\\Controller\\SocialController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/social']], [], []],
    'api_social_post' => [[], ['_controller' => 'App\\Controller\\SocialController::social'], [], [['text', '/api/social']], [], []],
    'api_social_put' => [['id'], ['_controller' => 'App\\Controller\\SocialController::putAndPatch'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/social']], [], []],
    'api_social_delete' => [['id'], ['_controller' => 'App\\Controller\\SocialController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/social']], [], []],
    'api_technos_get' => [[], ['_controller' => 'App\\Controller\\TechnoController::getAll'], [], [['text', '/api/technos']], [], []],
    'api_techno_get_one' => [['id'], ['_controller' => 'App\\Controller\\TechnoController::getOne'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/techno']], [], []],
    'api_techno_post' => [[], ['_controller' => 'App\\Controller\\TechnoController::techno'], [], [['text', '/api/techno']], [], []],
    'api_techno_put' => [['id'], ['_controller' => 'App\\Controller\\TechnoController::putAndPatch'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/techno']], [], []],
    'api_techno_delete' => [['id'], ['_controller' => 'App\\Controller\\TechnoController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/techno']], [], []],
    'api_login_check' => [[], [], [], [['text', '/api/login_check']], [], []],
];
