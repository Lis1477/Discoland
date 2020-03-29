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
Route::post('rezultaty-poiska', 'SearchResultController@postIndex');

Route::post('ajax/datalist', 'Ajax\DatalistController@postIndex');

Route::prefix('korzina-tovarov')->group(function(){
	Route::get('/', 'CartController@getIndex');
	Route::get('/delete/{id}', 'CartController@getDelete');
	Route::post('/edit/{id}', 'CartController@postEdit');
});

//Route::get('korzina-tovarov', 'CartController@getIndex');

Route::prefix('katalog')->group(function(){
	Route::get('/', 'ShopPageController@getIndex');
	Route::get('/{cat_slug}', 'ProductPageController@getIndex');
	Route::get('/{cat_slug}/{product_slug}', 'ProductItemController@getIndex');
});

Route::get('', 'MainPageController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//> Админка
Route::get('adm', 'Admin\MainPageAdminController@getIndex')
	->middleware(['auth', 'auth.admin']);

Route::get('adm/category', 'Admin\CategoryAdminController@index');
Route::get('adm/category/edit/{id}', 'Admin\CategoryAdminController@edit');


Route::namespace('Admin')->prefix('adm')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
	Route::resource('/users', 'UserController');
});

// Route::get('adm/replaceprod', 'Admin\ReplaceTableController@getIndexProd');
// Route::get('adm/replace', 'Admin\ReplaceTableController@getIndex');



//<

