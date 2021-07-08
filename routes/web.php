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

Auth::routes();

Route::middleware(['auth'])->group(function () { });

	Route::group(['namespace' => 'Dashboard'], function() {
		Route::get('/', 'DashboardController@index')->name('home');
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
		Route::get('/ajax', 'DashboardController@ajax')->name('ajax');
	});

    Route::group(['namespace' => 'Provider', 'prefix' => 'provider'], function() {
        Route::get('/', 'ProviderController@index')->name('provider.index');
        Route::get('/create', 'ProviderController@create')->name('provider.create');
        Route::post('/create', 'ProviderController@store')->name('provider.store');
        Route::get('/edit/{provider_id}', 'ProviderController@edit')->name('provider.edit');
        Route::post('/edit/{provider_id}', 'ProviderController@update')->name('provider.update');
        Route::get('/delete/{provider_id}', 'ProviderController@delete')->name('provider.delete');
    });
