<?php

$router->get('', 'PagesController@home');

$router->post('tasks', 'TasksController@store');

$router->post('tasks/update', 'TasksController@update');

$router->post('tasks/delete', 'TasksController@delete');
