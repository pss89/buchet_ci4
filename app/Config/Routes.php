<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
// $routes->get('/test', 'Home::test');
$routes->get('/join', 'Join::index');
$routes->post('/join', 'Join::store');

$routes->group('admin', function ($routes) {
    $routes->get('/', 'Admin\Main::index');
    $routes->get('join', 'Admin\Join::index');
});

// app/Config/Routes.php
$routes->set404Override(function() {
    echo view('errors/html/error_404', [
        'title' => '404',
        'message' => '존재하지 않는 페이지입니다'
    ]);
});