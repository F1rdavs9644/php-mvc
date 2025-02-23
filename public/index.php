<?php

session_start();

require_once '../core/Router.php';
require_once '../core/Controller.php';
require_once '../config/database.php';
require_once '../app/Controllers/PostController.php';
require_once '../app/Controllers/UserController.php';


// Routingni sozlash
$router = new Router();

$router->get('/', 'UserController@register');
$router->get('/auth/register', 'UserController@register');
$router->get('/auth/login', 'UserController@login');
$router->post('/auth/register', 'UserController@store');
$router->post('/auth/logout', 'UserController@logout');
$router->post('/auth/login', 'UserController@loginstore');




// $router->get('/', 'PostController@index');
$router->get('/post/index', 'PostController@index');
$router->get('/posts/create', 'PostController@create');
$router->post('/posts/store', 'PostController@store');
$router->get('/posts/show', 'PostController@show');
$router->get('/posts/edit', 'PostController@edit');
$router->post('/posts/update', 'PostController@update');
$router->get('/posts/delete', 'PostController@destroy');

$router->dispatch();
