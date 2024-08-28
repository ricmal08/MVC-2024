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
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\CardGameController::home'], null, null, null, false, false, null]],
        '/card' => [
            [['_route' => 'card_start', '_controller' => 'App\\Controller\\CardGameController::card'], null, null, null, false, false, null],
            [['_route' => 'card', '_controller' => 'App\\Controller\\DiceGameController::card'], null, null, null, false, false, null],
        ],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardGameController::showDeck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card_deck_shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_deck_draw', '_controller' => 'App\\Controller\\CardGameController::drawCard'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api_index', '_controller' => 'App\\Controller\\ControllerJson::apiIndex'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\ControllerJson::apiDeck'], null, null, null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_deck_shuffle', '_controller' => 'App\\Controller\\ControllerJson::apiDeckShuffle'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/draw' => [[['_route' => 'api_deck_draw', '_controller' => 'App\\Controller\\ControllerJson::drawOneCard'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'App\\Controller\\DiceGameController::home'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'App\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init_post', '_controller' => 'App\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'App\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'App\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'App\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/api/quote' => [[['_route' => 'api_quote', '_controller' => 'App\\Controller\\LuckyControllerTwig::apiQuote'], null, null, null, false, false, null]],
        '/lucky/number/twig' => [[['_route' => 'lucky_number', '_controller' => 'App\\Controller\\LuckyControllerTwig::number'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\LuckyControllerTwig::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\LuckyControllerTwig::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\LuckyControllerTwig::lucky'], null, null, null, false, false, null]],
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
                .'|/card/deck/draw/([^/]++)(*:193)'
                .'|/api/deck/draw/([^/]++)(*:224)'
                .'|/game/pig/test/(?'
                    .'|roll/(\\d+)(*:260)'
                    .'|dicehand/(\\d+)(*:282)'
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
        193 => [[['_route' => 'card_deck_draw_count', '_controller' => 'App\\Controller\\CardGameController::drawCount'], ['count'], null, null, false, true, null]],
        224 => [[['_route' => 'api_deck_draw_number', '_controller' => 'App\\Controller\\ControllerJson::drawMultipleCards'], ['number'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'test_roll_num_dices', '_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        282 => [
            [['_route' => 'test_dicehand', '_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
