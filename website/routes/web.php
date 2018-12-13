<?php

session_start();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* $router->get('/', function () use ($router) {
  return view('home');
}); */

$router->get('/', 'HomeController@index');
$router->get('/chat', 'ChatController@index');
$router->get('/chat/get-data', 'ChatController@getData');
$router->get('/chat/login', 'ChatController@login');
$router->get('/chat/logoff', 'ChatController@logoff');
$router->post('/chat/post-data', 'ChatController@postData');
$router->post('/chat/login/validate', 'ChatController@loginValidate');
