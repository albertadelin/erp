<?php

// TABLE

$router->get('/', 'HomeController@show');
$router->get('/angajati', 'EmployeesController@show');
$router->get('/produse', 'ProductsController@show');
$router->get('/masini', 'CarsController@show');

$router->get('/angajati/show', 'EmployeesController@tableData');
$router->get('/produse/show', 'ProductsController@tableData');
$router->get('/masini/show', 'CarsController@tableData');

// ADD

$router->get('/angajati/showAdd', 'EmployeesController@showAdd');
$router->get('/angajati/add', 'EmployeesController@create');

$router->get('/masini/showAdd', 'CarsController@showAdd');
$router->get('/masini/add', 'CarsController@create');

$router->get('/produse/showAdd', 'ProductsController@showAdd');
$router->get('/produse/add', 'ProductsController@create');

// DELETE

$router->get('/produse/{id}/delete', 'ProductsController@destroy');
$router->get('/masini/{id}/delete', 'CarsController@destroy');
$router->get('/angajati/{id}/delete', 'EmployeesController@destroy');

// UPDATE

$router->get('/angajati/{id}/showEdit', 'EmployeesController@showEdit');
$router->get('/angajati/{id}/update', 'EmployeesController@update');

$router->get('/masini/{id}/showEdit', 'CarsController@showEdit');
$router->get('/masini/{id}/update', 'CarsController@update');

$router->get('/produse/{id}/showEdit', 'ProductsController@showEdit');
$router->get('/produse/{id}/update', 'ProductsController@update');
