<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/application' => [[['_route' => 'app_application_index', '_controller' => 'App\\Controller\\ApplicationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/course' => [[['_route' => 'app_course_index', '_controller' => 'App\\Controller\\CourseController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/course/courses' => [[['_route' => 'app_course_front', '_controller' => 'App\\Controller\\CourseController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/course/new' => [[['_route' => 'app_course_new', '_controller' => 'App\\Controller\\CourseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/course/course/triASC' => [[['_route' => '/course/triASC', '_controller' => 'App\\Controller\\CourseController::TriASC'], null, null, null, false, false, null]],
        '/course/course/triDESC' => [[['_route' => '/course/triDESC', '_controller' => 'App\\Controller\\CourseController::triDESC'], null, null, null, false, false, null]],
        '/freelance' => [[['_route' => 'app_freelance_index', '_controller' => 'App\\Controller\\FreelanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/freelance/Freelancer' => [[['_route' => 'app_freelance_indexFree', '_controller' => 'App\\Controller\\FreelanceController::indexFree'], null, ['GET' => 0], null, false, false, null]],
        '/freelance/new' => [[['_route' => 'app_freelance_new', '_controller' => 'App\\Controller\\FreelanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/freelanceRecommendedForYou/py' => [[['_route' => 'app_freelance_recommend', '_controller' => 'App\\Controller\\FreelanceController::recommendation'], null, ['GET' => 0], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lesson' => [[['_route' => 'app_lesson_index', '_controller' => 'App\\Controller\\LessonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lesson/new' => [[['_route' => 'app_lesson_new', '_controller' => 'App\\Controller\\LessonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/packag' => [[['_route' => 'app_packag_index', '_controller' => 'App\\Controller\\PackagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/packag/new' => [[['_route' => 'app_packag_new', '_controller' => 'App\\Controller\\PackagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/services' => [[['_route' => 'app_service_service_front', '_controller' => 'App\\Controller\\ServiceController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/courses/search' => [[['_route' => 'search_courses'], null, ['POST' => 0], null, false, false, null]],
        '/pdf' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\CourseController::pdf'], null, null, null, false, false, null]],
        '/courses/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\CourseBackController::index'], null, null, null, false, false, null]],
        '/statistics' => [[['_route' => 'statistics', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/services/back' => [[['_route' => 'backend', '_controller' => 'App\\Controller\\ServiceBackController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/application(?'
                    .'|/([^/]++)(?'
                        .'|(*:34)'
                        .'|/(?'
                            .'|edit(*:49)'
                            .'|select(*:62)'
                        .')'
                        .'|(*:70)'
                    .')'
                    .'|applicants/([^/]++)(*:97)'
                .')'
                .'|/course/(?'
                    .'|([^/]++)(?'
                        .'|(*:127)'
                        .'|/edit(*:140)'
                        .'|(*:148)'
                    .')'
                    .'|search(*:163)'
                    .'|([^/]++)(*:179)'
                    .'|course/([^/]++)(*:202)'
                .')'
                .'|/freelance(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|myOffersBO(*:250)'
                            .'|([^/]++)(*:266)'
                        .')'
                        .'|(*:275)'
                    .')'
                    .'|Freelancer/([^/]++)(*:303)'
                    .'|editOffer/([^/]++)(*:329)'
                    .'|filter(?'
                        .'|/([^/]++)(*:355)'
                        .'|ByDate/([^/]++)(*:378)'
                    .')'
                .')'
                .'|/lesson/(?'
                    .'|course/([^/]++)/lesson(?'
                        .'|(*:424)'
                        .'|s(*:433)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:453)'
                        .'|/edit(*:466)'
                        .'|(*:474)'
                    .')'
                .')'
                .'|/packag/([^/]++)(?'
                    .'|(*:503)'
                    .'|/edit(*:516)'
                    .'|(*:524)'
                .')'
                .'|/service/(?'
                    .'|([^/]++)(*:553)'
                    .'|service/([^/]++)/packag(*:584)'
                    .'|([^/]++)(?'
                        .'|/edit(*:608)'
                        .'|(*:616)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:657)'
                    .'|wdt/([^/]++)(*:677)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:723)'
                            .'|router(*:737)'
                            .'|exception(?'
                                .'|(*:757)'
                                .'|\\.css(*:770)'
                            .')'
                        .')'
                        .'|(*:780)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_application_new', '_controller' => 'App\\Controller\\ApplicationController::new'], ['idOffer'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        49 => [[['_route' => 'app_application_edit', '_controller' => 'App\\Controller\\ApplicationController::edit'], ['idapp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        62 => [[['_route' => 'app_application_select', '_controller' => 'App\\Controller\\ApplicationController::select'], ['idapp'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        70 => [[['_route' => 'app_application_delete', '_controller' => 'App\\Controller\\ApplicationController::delete'], ['idapp'], ['POST' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_application_showSecific', '_controller' => 'App\\Controller\\ApplicationController::show'], ['idFreelance'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_course_show', '_controller' => 'App\\Controller\\CourseController::show'], ['cid'], ['GET' => 0], null, false, true, null]],
        140 => [[['_route' => 'app_course_edit', '_controller' => 'App\\Controller\\CourseController::edit'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        148 => [[['_route' => 'app_course_delete', '_controller' => 'App\\Controller\\CourseController::delete'], ['cid'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'search', '_controller' => 'App\\Controller\\CourseController::search'], [], null, null, false, false, null]],
        179 => [[['_route' => 'app_course_filter', '_controller' => 'App\\Controller\\CourseController::filter'], ['cat'], ['POST' => 0], null, false, true, null]],
        202 => [[['_route' => 'course_filter', '_controller' => 'App\\Controller\\CourseController::filterCoursesByCategory'], ['category'], null, null, false, true, null]],
        250 => [[['_route' => 'app_freelance_myOffersBO', '_controller' => 'App\\Controller\\FreelanceController::myOffers'], ['idBO'], ['GET' => 0], null, false, false, null]],
        266 => [[['_route' => 'app_freelance_show', '_controller' => 'App\\Controller\\FreelanceController::show'], ['idfreelance', 'idBO'], ['GET' => 0], null, false, true, null]],
        275 => [[['_route' => 'app_freelance_delete', '_controller' => 'App\\Controller\\FreelanceController::delete'], ['idfreelance'], ['POST' => 0], null, false, true, null]],
        303 => [[['_route' => 'app_freelance_showFree', '_controller' => 'App\\Controller\\FreelanceController::showFree'], ['idfreelance'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_freelance_edit', '_controller' => 'App\\Controller\\FreelanceController::edit'], ['idfreelance'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        355 => [[['_route' => 'app_freelance_searchCategory', '_controller' => 'App\\Controller\\FreelanceController::searchCategory'], ['category'], ['GET' => 0], null, false, true, null]],
        378 => [[['_route' => 'app_freelance_searchDate', '_controller' => 'App\\Controller\\FreelanceController::searchByDate'], ['date'], ['GET' => 0], null, false, true, null]],
        424 => [[['_route' => 'app_lesson_course_front', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourseFront'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        433 => [[['_route' => 'app_lesson_course', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourse'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'app_lesson_show', '_controller' => 'App\\Controller\\LessonController::show'], ['lid'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_lesson_edit', '_controller' => 'App\\Controller\\LessonController::edit'], ['lid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        474 => [[['_route' => 'app_lesson_delete', '_controller' => 'App\\Controller\\LessonController::delete'], ['lid'], ['POST' => 0], null, false, true, null]],
        503 => [[['_route' => 'app_packag_show', '_controller' => 'App\\Controller\\PackagController::show'], ['idP'], ['GET' => 0], null, false, true, null]],
        516 => [[['_route' => 'app_packag_edit', '_controller' => 'App\\Controller\\PackagController::edit'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        524 => [[['_route' => 'app_packag_delete', '_controller' => 'App\\Controller\\PackagController::delete'], ['idP'], ['POST' => 0], null, false, true, null]],
        553 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        584 => [[['_route' => 'app_packag_service_front', '_controller' => 'App\\Controller\\ServiceController::showPackagsByServiceFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        616 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        657 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        677 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        723 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        737 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        757 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        770 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        780 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
