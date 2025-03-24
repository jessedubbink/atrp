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

Route::get('/', 'PageController@homepage')->name('homepage');
Route::get('/updates', 'PageController@updates')->name('updates');
Route::get('/rules', 'PageController@rules')->name('rules');
Route::get('/news', 'PageController@news')->name('news');
Route::get('/policies', 'PageController@policies')->name('policies');
Route::get('/realestate', 'PageController@realestate')->name('realestate');
Route::get('/realestate/property/{slug}', 'PageController@showProperty')->name('realestate.show');
Route::get('/businesses', 'PageController@businesses')->name('businesses');
Route::get('/businesses/{slug}', 'PageController@showBusiness')->name('businesses.show');
Route::get('/laws', 'PageController@laws')->name('laws');

Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

        Route::get('/updates', 'UpdatesController@index')->name('updates.index');
        Route::get('/updates/create', 'UpdatesController@create')->name('updates.create');
        Route::post('/updates/create', 'UpdatesController@store')->name('updates.create');
        Route::get('/updates/{id}/edit', 'UpdatesController@edit')->name('updates.edit');
        Route::put('/updates/{id}/edit', 'UpdatesController@update')->name('updates.update');
        Route::delete('/updates/{id}/delete', 'UpdatesController@destroy')->name('updates.delete');

        // News
        Route::get('/news', 'NewsController@index')->name('news.index');
        Route::get('/news/article/create', 'NewsController@create')->name('news.create');
        Route::post('/news/article/create', 'NewsController@store')->name('news.create');
        Route::get('/news/article/{slug}', 'NewsController@show')->name('news.show');
        Route::get('/news/article/{id}/edit', 'NewsController@edit')->name('news.edit');
        Route::put('/news/article/{id}/edit', 'NewsController@update')->name('news.update');
        Route::delete('/news/article/{id}/delete', 'NewsController@destroy')->name('news.delete');

            // Advertisments
            Route::get('/news/advertisments', 'AdsController@index')->name('news.ads.index');
            Route::get('/news/advertisments/create', 'AdsController@create')->name('news.ads.create');
            Route::post('/news/advertisments/create', 'AdsController@store')->name('news.ads.create');
            Route::get('/news/advertisments/{id}/edit', 'AdsController@edit')->name('news.ads.edit');
            Route::put('/news/advertisments/{id}/edit', 'AdsController@update')->name('news.ads.update');
            Route::delete('/news/advertisments/{id}/delete', 'AdsController@destroy')->name('news.ads.delete');


        // Real Estate
        Route::get('/realestate', 'RealestateController@index')->name('realestate.index');
        Route::get('/realestate/property/create', 'RealestateController@create')->name('realestate.create');
        Route::post('/realestate/property/create', 'RealestateController@store')->name('realestate.create');
        Route::post('/realestate/property/{id}/sell', 'RealestateController@sell')->name('realestate.sell');
        Route::get('/realestate/property/{id}/edit', 'RealestateController@edit')->name('realestate.edit');
        Route::put('/realestate/property/{id}/edit', 'RealestateController@update')->name('realestate.update');
        Route::delete('/realestate/property/{id}/delete', 'RealestateController@destroy')->name('realestate.delete');

        // Businesses
        Route::get('/businesses', 'BusinessesController@index')->name('businesses.index');
        Route::get('/businesses/create', 'BusinessesController@create')->name('businesses.create');
        Route::post('/businesses/create', 'BusinessesController@store')->name('businesses.create');
        Route::get('/businesses/{id}/edit', 'BusinessesController@edit')->name('businesses.edit');
        Route::put('/businesses/{id}/edit', 'BusinessesController@update')->name('businesses.update');
        Route::delete('/businesses/{id}/delete', 'BusinessesController@destroy')->name('businesses.delete');

        // Users
        Route::get('/users', 'UserController@index')->name('users.index');
        Route::get('/users/{id}', 'UserController@show')->name('users.show');
        Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
        Route::put('/users/{id}/edit', 'UserController@update')->name('users.update');
        Route::delete('/users/{id}/delete', 'UserController@destroy')->name('users.delete');

        // Roles
        Route::get('/roles', 'RoleController@index')->name('roles.index');
        Route::get('/roles/create', 'RoleController@create')->name('roles.create');
        Route::post('/roles/create', 'RoleController@store')->name('roles.create');
        Route::get('/roles/{id}', 'RoleController@show')->name('roles.show');
        Route::get('/roles/{id}/edit', 'RoleController@edit')->name('roles.edit');
        Route::put('/roles/{id}/edit', 'RoleController@update')->name('roles.update');
        Route::delete('/roles/{id}/delete', 'RoleController@destroy')->name('roles.delete');

        // permissions
        Route::get('/permissions', 'PermissionController@index')->name('permissions.index');
        Route::get('/permissions/create', 'PermissionController@create')->name('permissions.create');
        Route::post('/permissions/create', 'PermissionController@store')->name('permissions.create');
        Route::get('/permissions/{id}', 'PermissionController@show')->name('permissions.show');
        Route::get('/permissions/{id}/edit', 'PermissionController@edit')->name('permissions.edit');
        Route::put('/permissions/{id}/edit', 'PermissionController@update')->name('permissions.update');
        Route::delete('/permissions/{id}/delete', 'PermissionController@destroy')->name('permissions.delete');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
