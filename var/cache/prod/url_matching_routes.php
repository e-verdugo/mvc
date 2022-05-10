<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardController::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'shuffle', '_controller' => 'App\\Controller\\CardController::shuffle'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\CardController::draw'], null, null, null, false, false, null]],
        '/card/deck2' => [[['_route' => 'deck2', '_controller' => 'App\\Controller\\CardController::deck2'], null, null, null, false, false, null]],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\CardController::game'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'doc', '_controller' => 'App\\Controller\\CardController::doc'], null, null, null, false, false, null]],
        '/game/play' => [
            [['_route' => 'play', '_controller' => 'App\\Controller\\CardController::play'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'play-process', '_controller' => 'App\\Controller\\CardController::playProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/card/api/deck' => [[['_route' => 'jsonapi', '_controller' => 'App\\Controller\\JSONController::jsonapi'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/create' => [
            [['_route' => 'create', '_controller' => 'App\\Controller\\LibraryController::createBook'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null],
            [['_route' => 'create_process', '_controller' => 'App\\Controller\\LibraryController::createBookProcess'], null, ['POST' => 0], null, false, false, null],
        ],
        '/library/show_all' => [[['_route' => 'read_many', '_controller' => 'App\\Controller\\LibraryController::showAllBooks'], null, null, null, false, false, null]],
        '/library/show' => [[['_route' => 'read_one', '_controller' => 'App\\Controller\\LibraryController::showBookByIsbn'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\ReportController::home'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\ReportController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\ReportController::report'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/card/deck/d(?'
                    .'|raw/([^/]++)(*:34)'
                    .'|eal/([^/]++)/([^/]++)(*:62)'
                .')'
                .'|/library/(?'
                    .'|show/([^/]++)(*:95)'
                    .'|update/([^/]++)(?'
                        .'|(*:120)'
                    .')'
                    .'|delete/([^/]++)(*:144)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'draw-number', '_controller' => 'App\\Controller\\CardController::drawNumber'], ['number'], null, null, false, true, null]],
        62 => [[['_route' => 'deal', '_controller' => 'App\\Controller\\CardController::player'], ['players', 'number'], null, null, false, true, null]],
        95 => [[['_route' => 'read_one_process', '_controller' => 'App\\Controller\\LibraryController::showBookByIsbnProcess'], ['isbn'], null, null, false, true, null]],
        120 => [
            [['_route' => 'update', '_controller' => 'App\\Controller\\LibraryController::updateBook'], ['isbn'], ['GET' => 0], null, false, true, null],
            [['_route' => 'update_process', '_controller' => 'App\\Controller\\LibraryController::updateBookProcess'], ['isbn'], ['POST' => 0], null, false, true, null],
        ],
        144 => [
            [['_route' => 'delete_process', '_controller' => 'App\\Controller\\LibraryController::deleteBookByIsbnProcess'], ['isbn'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
