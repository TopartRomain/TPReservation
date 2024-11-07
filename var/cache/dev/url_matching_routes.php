<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/booking' => [[['_route' => 'booking', '_controller' => 'App\\Controller\\BookingController::reserver'], null, null, null, false, false, null]],
        '/bookings' => [[['_route' => 'bookings', '_controller' => 'App\\Controller\\BookingController::reservations'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'service_list', '_controller' => 'App\\Controller\\ServiceController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/booking/(?'
                    .'|annuler/([^/]++)(*:70)'
                    .'|confirmer/([^/]++)(*:95)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        70 => [[['_route' => 'booking_annuler', '_controller' => 'App\\Controller\\BookingController::annuler'], ['id'], null, null, false, true, null]],
        95 => [
            [['_route' => 'booking_confirmer', '_controller' => 'App\\Controller\\BookingController::confirmer'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
