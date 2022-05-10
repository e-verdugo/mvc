<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'card' => [[], ['_controller' => 'App\\Controller\\CardController::card'], [], [['text', '/card']], [], [], []],
    'deck' => [[], ['_controller' => 'App\\Controller\\CardController::deck'], [], [['text', '/card/deck']], [], [], []],
    'shuffle' => [[], ['_controller' => 'App\\Controller\\CardController::shuffle'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'draw' => [[], ['_controller' => 'App\\Controller\\CardController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'draw-number' => [['number'], ['_controller' => 'App\\Controller\\CardController::drawNumber'], [], [['variable', '/', '[^/]++', 'number', true], ['text', '/card/deck/draw']], [], [], []],
    'deal' => [['players', 'number'], ['_controller' => 'App\\Controller\\CardController::player'], [], [['variable', '/', '[^/]++', 'number', true], ['variable', '/', '[^/]++', 'players', true], ['text', '/card/deck/deal']], [], [], []],
    'deck2' => [[], ['_controller' => 'App\\Controller\\CardController::deck2'], [], [['text', '/card/deck2']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\CardController::game'], [], [['text', '/game']], [], [], []],
    'doc' => [[], ['_controller' => 'App\\Controller\\CardController::doc'], [], [['text', '/game/doc']], [], [], []],
    'play' => [[], ['_controller' => 'App\\Controller\\CardController::play'], [], [['text', '/game/play']], [], [], []],
    'play-process' => [[], ['_controller' => 'App\\Controller\\CardController::playProcess'], [], [['text', '/game/play']], [], [], []],
    'jsonapi' => [[], ['_controller' => 'App\\Controller\\JSONController::jsonapi'], [], [['text', '/card/api/deck']], [], [], []],
    'library' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library']], [], [], []],
    'create' => [[], ['_controller' => 'App\\Controller\\LibraryController::createBook'], [], [['text', '/library/create']], [], [], []],
    'create_process' => [[], ['_controller' => 'App\\Controller\\LibraryController::createBookProcess'], [], [['text', '/library/create']], [], [], []],
    'read_many' => [[], ['_controller' => 'App\\Controller\\LibraryController::showAllBooks'], [], [['text', '/library/show_all']], [], [], []],
    'read_one' => [[], ['_controller' => 'App\\Controller\\LibraryController::showBookByIsbn'], [], [['text', '/library/show']], [], [], []],
    'read_one_process' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryController::showBookByIsbnProcess'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/library/show']], [], [], []],
    'update' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryController::updateBook'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/library/update']], [], [], []],
    'update_process' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryController::updateBookProcess'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/library/update']], [], [], []],
    'delete_process' => [['isbn'], ['_controller' => 'App\\Controller\\LibraryController::deleteBookByIsbnProcess'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/library/delete']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\ReportController::home'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\ReportController::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\ReportController::report'], [], [['text', '/report']], [], [], []],
];
