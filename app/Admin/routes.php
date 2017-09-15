<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('ad',AdController::class);
    $router->resource('book',BookController::class);
    $router->resource('country',CountryController::class);
    $router->resource('import',ImportController::class);
    $router->resource('tags',TagsController::class);
});
