<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_course_index' => [[], ['_controller' => 'App\\Controller\\CourseController::index'], [], [['text', '/course/']], [], [], []],
    'app_course_front' => [[], ['_controller' => 'App\\Controller\\CourseController::indexFront'], [], [['text', '/course/courses']], [], [], []],
    'app_course_new' => [[], ['_controller' => 'App\\Controller\\CourseController::new'], [], [['text', '/course/new']], [], [], []],
    'app_course_show' => [['cid'], ['_controller' => 'App\\Controller\\CourseController::show'], [], [['variable', '/', '[^/]++', 'cid', true], ['text', '/course']], [], [], []],
    'app_course_edit' => [['cid'], ['_controller' => 'App\\Controller\\CourseController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'cid', true], ['text', '/course']], [], [], []],
    'app_course_delete' => [['cid'], ['_controller' => 'App\\Controller\\CourseController::delete'], [], [['variable', '/', '[^/]++', 'cid', true], ['text', '/course']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\CourseController::search'], [], [['text', '/course/search']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_lesson_index' => [[], ['_controller' => 'App\\Controller\\LessonController::index'], [], [['text', '/lesson/']], [], [], []],
    'app_lesson_new' => [[], ['_controller' => 'App\\Controller\\LessonController::new'], [], [['text', '/lesson/new']], [], [], []],
    'app_lesson_course_front' => [['cid'], ['_controller' => 'App\\Controller\\LessonController::showLessonsByCourseFront'], [], [['text', '/lesson'], ['variable', '/', '[^/]++', 'cid', true], ['text', '/lesson/course']], [], [], []],
    'app_lesson_course' => [['cid'], ['_controller' => 'App\\Controller\\LessonController::showLessonsByCourse'], [], [['text', '/lessons'], ['variable', '/', '[^/]++', 'cid', true], ['text', '/lesson/course']], [], [], []],
    'app_lesson_show' => [['lid'], ['_controller' => 'App\\Controller\\LessonController::show'], [], [['variable', '/', '[^/]++', 'lid', true], ['text', '/lesson']], [], [], []],
    'app_lesson_edit' => [['lid'], ['_controller' => 'App\\Controller\\LessonController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'lid', true], ['text', '/lesson']], [], [], []],
    'app_lesson_delete' => [['lid'], ['_controller' => 'App\\Controller\\LessonController::delete'], [], [['variable', '/', '[^/]++', 'lid', true], ['text', '/lesson']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'search_courses' => [[], [], [], [['text', '/courses/search']], [], [], []],
];
