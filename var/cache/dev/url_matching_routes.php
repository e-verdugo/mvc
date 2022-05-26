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
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\CardController::shuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\CardController::draw'], null, null, null, false, false, null]],
        '/card/deck2' => [[['_route' => 'deck2', '_controller' => 'App\\Controller\\CardController::deck2'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\GameController::game'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\GameController::doc'], null, null, null, false, false, null]],
        '/game/play' => [
            [['_route' => 'play', '_controller' => 'App\\Controller\\GameController::play'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'play-process', '_controller' => 'App\\Controller\\GameController::playProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/api/deck' => [[['_route' => 'jsonapi', '_controller' => 'App\\Controller\\JSONController::jsonapi'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/create' => [
            [['_route' => 'create', '_controller' => 'App\\Controller\\LibraryController::createBook'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'create_process', '_controller' => 'App\\Controller\\LibraryController::createBookProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/show_all' => [[['_route' => 'read_many', '_controller' => 'App\\Controller\\LibraryController::showAllBooks'], null, null, null, false, false, null]],
        '/library/show' => [[['_route' => 'read_one', '_controller' => 'App\\Controller\\LibraryController::showBookByIsbn'], null, null, null, false, false, null]],
        '/proj' => [
            [['_route' => 'proj', '_controller' => 'App\\Controller\\ProjController::proj'], null, null, null, false, false, null],
            [['_route' => 'proj-process', '_controller' => 'App\\Controller\\ProjController::projProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/proj/about' => [[['_route' => 'aboutProj', '_controller' => 'App\\Controller\\ProjController::aboutProj'], null, null, null, false, false, null]],
        '/proj/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\ProjController::reset'], null, null, null, false, false, null]],
        '/proj/plump' => [
            [['_route' => 'plump', '_controller' => 'App\\Controller\\ProjController::plump'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'plump-process', '_controller' => 'App\\Controller\\ProjController::plumpProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ReportController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ReportController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ReportController::report'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\ReportController::metrics'], null, null, null, false, false, null]],
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
                .'|/card/deck/d(?'
                    .'|raw/([^/]++)(*:196)'
                    .'|eal/([^/]++)/([^/]++)(*:225)'
                .')'
                .'|/library/(?'
                    .'|show/([^/]++)(*:259)'
                    .'|update/([^/]++)(?'
                        .'|(*:285)'
                    .')'
                    .'|delete/([^/]++)(*:309)'
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
        196 => [[['_route' => 'draw-number', '_controller' => 'App\\Controller\\CardController::drawNumber'], ['number'], null, null, false, true, null]],
        225 => [[['_route' => 'deal', '_controller' => 'App\\Controller\\CardController::player'], ['players', 'number'], null, null, false, true, null]],
        259 => [[['_route' => 'read_one_process', '_controller' => 'App\\Controller\\LibraryController::showBookByIsbnProcess'], ['isbn'], null, null, false, true, null]],
        285 => [
            [['_route' => 'update', '_controller' => 'App\\Controller\\LibraryController::updateBook'], ['isbn'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_process', '_controller' => 'App\\Controller\\LibraryController::updateBookProcess'], ['isbn'], ['POST' => 0], null, false, true, null],
        ],
        309 => [
            [['_route' => 'delete_process', '_controller' => 'App\\Controller\\LibraryController::deleteBookByIsbnProcess'], ['isbn'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
