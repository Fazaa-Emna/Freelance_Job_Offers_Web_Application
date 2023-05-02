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
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/back' => [[['_route' => 'app_event_index_back', '_controller' => 'App\\Controller\\EventController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/event/Event' => [[['_route' => 'app_event_event_front', '_controller' => 'App\\Controller\\EventController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/freelance' => [[['_route' => 'app_freelance_index', '_controller' => 'App\\Controller\\FreelanceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/freelance/Freelancer' => [[['_route' => 'app_freelance_indexFree', '_controller' => 'App\\Controller\\FreelanceController::indexFree'], null, ['GET' => 0], null, false, false, null]],
        '/freelance/new' => [[['_route' => 'app_freelance_new', '_controller' => 'App\\Controller\\FreelanceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/freelanceRecommendedForYou/py' => [[['_route' => 'app_freelance_recommend', '_controller' => 'App\\Controller\\FreelanceController::recommendation'], null, ['GET' => 0], null, false, false, null]],
        '/hackathon' => [[['_route' => 'app_hackathon_index', '_controller' => 'App\\Controller\\HackathonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hackathon/Hackathon' => [[['_route' => 'app_hackathon_hackathon_front', '_controller' => 'App\\Controller\\HackathonController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/hackathon/new' => [[['_route' => 'app_hackathon_new', '_controller' => 'App\\Controller\\HackathonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/lesson' => [[['_route' => 'app_lesson_index', '_controller' => 'App\\Controller\\LessonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lesson/new' => [[['_route' => 'app_lesson_new', '_controller' => 'App\\Controller\\LessonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/packag' => [[['_route' => 'app_packag_index', '_controller' => 'App\\Controller\\PackagController::index'], null, ['GET' => 0], null, true, false, null]],
        '/packag/new' => [[['_route' => 'app_packag_new', '_controller' => 'App\\Controller\\PackagController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/services' => [[['_route' => 'app_service_service_front', '_controller' => 'App\\Controller\\ServiceController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/workshop' => [[['_route' => 'app_workshop_index', '_controller' => 'App\\Controller\\WorkshopController::index'], null, ['GET' => 0], null, true, false, null]],
        '/workshop/new' => [[['_route' => 'app_workshop_new', '_controller' => 'App\\Controller\\WorkshopController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/search-users' => [[['_route' => 'search_users', '_controller' => 'App\\Controller\\EventController::searchOrdonnance'], null, null, null, false, false, null]],
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
                .'|/event/([^/]++)(?'
                    .'|(*:229)'
                    .'|/edit(*:242)'
                    .'|(*:250)'
                .')'
                .'|/freelance(?'
                    .'|/([^/]++)(?'
                        .'|/(?'
                            .'|myOffersBO(*:298)'
                            .'|([^/]++)(*:314)'
                        .')'
                        .'|(*:323)'
                    .')'
                    .'|Freelancer/([^/]++)(*:351)'
                    .'|editOffer/([^/]++)(*:377)'
                    .'|filter(?'
                        .'|/([^/]++)(*:403)'
                        .'|ByDate/([^/]++)(*:426)'
                    .')'
                .')'
                .'|/hackathon/(?'
                    .'|([^/]++)(*:458)'
                    .'|hackathon/([^/]++)/edit(*:489)'
                    .'|([^/]++)(*:505)'
                .')'
                .'|/lesson/(?'
                    .'|course/([^/]++)/lesson(?'
                        .'|(*:550)'
                        .'|s(*:559)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:579)'
                        .'|/edit(*:592)'
                        .'|(*:600)'
                    .')'
                .')'
                .'|/packag/([^/]++)(?'
                    .'|(*:629)'
                    .'|/edit(*:642)'
                    .'|(*:650)'
                .')'
                .'|/service/(?'
                    .'|([^/]++)(*:679)'
                    .'|service/([^/]++)/packag(*:710)'
                    .'|([^/]++)(?'
                        .'|/edit(*:734)'
                        .'|(*:742)'
                    .')'
                .')'
                .'|/workshop/([^/]++)(?'
                    .'|(*:773)'
                    .'|/edit(*:786)'
                    .'|(*:794)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:831)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:870)'
                    .'|wdt/([^/]++)(*:890)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:936)'
                            .'|router(*:950)'
                            .'|exception(?'
                                .'|(*:970)'
                                .'|\\.css(*:983)'
                            .')'
                        .')'
                        .'|(*:993)'
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
        229 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['eventId'], ['GET' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['eventId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['eventId'], ['POST' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_freelance_myOffersBO', '_controller' => 'App\\Controller\\FreelanceController::myOffers'], ['idBO'], ['GET' => 0], null, false, false, null]],
        314 => [[['_route' => 'app_freelance_show', '_controller' => 'App\\Controller\\FreelanceController::show'], ['idfreelance', 'idBO'], ['GET' => 0], null, false, true, null]],
        323 => [[['_route' => 'app_freelance_delete', '_controller' => 'App\\Controller\\FreelanceController::delete'], ['idfreelance'], ['POST' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_freelance_showFree', '_controller' => 'App\\Controller\\FreelanceController::showFree'], ['idfreelance'], ['GET' => 0], null, false, true, null]],
        377 => [[['_route' => 'app_freelance_edit', '_controller' => 'App\\Controller\\FreelanceController::edit'], ['idfreelance'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        403 => [[['_route' => 'app_freelance_searchCategory', '_controller' => 'App\\Controller\\FreelanceController::searchCategory'], ['category'], ['GET' => 0], null, false, true, null]],
        426 => [[['_route' => 'app_freelance_searchDate', '_controller' => 'App\\Controller\\FreelanceController::searchByDate'], ['date'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'app_hackathon_show', '_controller' => 'App\\Controller\\HackathonController::show'], ['hackathon'], ['GET' => 0], null, false, true, null]],
        489 => [[['_route' => 'app_hackathon_edit', '_controller' => 'App\\Controller\\HackathonController::edit'], ['hackathon'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_hackathon_delete', '_controller' => 'App\\Controller\\HackathonController::delete'], ['event'], ['POST' => 0], null, false, true, null]],
        550 => [[['_route' => 'app_lesson_course_front', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourseFront'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        559 => [[['_route' => 'app_lesson_course', '_controller' => 'App\\Controller\\LessonController::showLessonsByCourse'], ['cid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        579 => [[['_route' => 'app_lesson_show', '_controller' => 'App\\Controller\\LessonController::show'], ['lid'], ['GET' => 0], null, false, true, null]],
        592 => [[['_route' => 'app_lesson_edit', '_controller' => 'App\\Controller\\LessonController::edit'], ['lid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        600 => [[['_route' => 'app_lesson_delete', '_controller' => 'App\\Controller\\LessonController::delete'], ['lid'], ['POST' => 0], null, false, true, null]],
        629 => [[['_route' => 'app_packag_show', '_controller' => 'App\\Controller\\PackagController::show'], ['idP'], ['GET' => 0], null, false, true, null]],
        642 => [[['_route' => 'app_packag_edit', '_controller' => 'App\\Controller\\PackagController::edit'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        650 => [[['_route' => 'app_packag_delete', '_controller' => 'App\\Controller\\PackagController::delete'], ['idP'], ['POST' => 0], null, false, true, null]],
        679 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        710 => [[['_route' => 'app_packag_service_front', '_controller' => 'App\\Controller\\ServiceController::showPackagsByServiceFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        734 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        742 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        773 => [[['_route' => 'app_workshop_show', '_controller' => 'App\\Controller\\WorkshopController::show'], ['workshop'], ['GET' => 0], null, false, true, null]],
        786 => [[['_route' => 'app_workshop_edit', '_controller' => 'App\\Controller\\WorkshopController::edit'], ['workshop'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        794 => [[['_route' => 'app_workshop_delete', '_controller' => 'App\\Controller\\WorkshopController::delete'], ['event'], ['POST' => 0], null, false, true, null]],
        831 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        870 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        890 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        936 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        950 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        970 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        983 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        993 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
