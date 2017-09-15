<?php

use App\Admin\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   // View::addExtension('html', 'php');
   // return view()->file('../project/index.html');
   $Home = new HomeController();
   return $Home->Home();
});
