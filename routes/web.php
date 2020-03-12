<?php

use Illuminate\Support\Facades\Route;

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


Route::get('magazin', 'ShopPageController@getIndex');
Route::get('', 'MainPageController@getIndex');

//> Админка
Route::get('adm', 'Admin\MainPageAdminController@getIndex');

// Route::get('adm/replaceprod', 'Admin\ReplaceTableController@getIndexProd');
// Route::get('adm/replace', 'Admin\ReplaceTableController@getIndex');

Route::get('/adm/category', 'Admin\CategoryAdminController@index');
Route::get('/adm/category/edit/{id}', 'Admin\CategoryAdminController@edit');



//<

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
