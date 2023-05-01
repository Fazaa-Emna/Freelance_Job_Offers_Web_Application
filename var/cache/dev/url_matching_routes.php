<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/course' => [[['_route' => 'app_course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/course/courses' => [[['_route' => 'app_course_front', '_controller' => 'App\\Controller\\CourseController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/course/new' => [[['_route' => 'app_course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lesson' => [[['_route' => 'app_lesson_index', '_controller' => 'App\\Controller\\LessonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lesson/new' => [[['_route' => 'app_lesson_new', '_controller' => 'App\\Controller\\LessonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/courses/search' => [[['_route' => 'search_courses'], null, ['POST' => 0], null, false, false, null]],
        '/pdf' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\CourseController::pdf'], null, null, null, false, false, null]],
        '/courses/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\CourseBackController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/course/(?'
                    .'|([^/]++)(?'
                        .'|(*:29)'
                        .'|/edit(*:41)'
                        .'|(*:48)'
                    .')'
                    .'|search(*:62)'
                    .'|filter(*:75)'
                .')'
                .'|/lesson/(?'
                    .'|course/([^/]++)/lesson(?'
                        .'|(*:119)'
                        .'|s(*:128)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:148)'
                        .'|/edit(*:161)'
                        .'|(*:169)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:210)'
                    .'|wdt/([^/]++)(*:230)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:276)'
                            .'|router(*:290)'
                            .'|exception(?'
                                .'|(*:310)'
                                .'|\\.css(*:323)'
                            .')'
                        .')'
                        .'|(*:333)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_course_show', '_controller' => 'App\\Controller\\CourseController::show'], ['cid'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [[['_route' => 'app_course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['cid'], ['POST' => 0], null, false, true, null]],
        62 => [[['_route' => 'search', '_controller' => 'App\\Controller\\CourseController::search'], [], null, null, false, false, null]],
        75 => [[['_route' => 'filter', '_controller' => 'App\\Controller\\CourseController::filter'], [], null, null, false, false, null]],
        119 => [[['_route' => 'app_lesson_course_front', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourseFront'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        128 => [[['_route' => 'app_lesson_course', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourse'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        148 => [[['_route' => 'app_lesson_show', '_controller' => 'App\\Controller\\LessonController::show'], ['lid'], ['GET' => 0], null, false, true, null]],
        161 => [[['_route' => 'app_lesson_edit', '_controller' => 'App\\Controller\\LessonController::edit'], ['lid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        169 => [[['_route' => 'app_lesson_delete', '_controller' => 'App\\Controller\\LessonController::delete'], ['lid'], ['POST' => 0], null, false, true, null]],
        210 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        230 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        276 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        290 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        310 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        323 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        333 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
