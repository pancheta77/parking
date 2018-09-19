<?php

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

Route::get('/', 'PagesController@index');

Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
  'middleware' => 'auth'],
	function(){
		//Rutas de administración - estacionamiento
    Route::get('/', 'AdminController@index')->name('dashboard');
		Route::get('estacionamientos', 'ParkingController@index')->name('admin.parkings.index');
		Route::get('estacionamientos/create', 'ParkingController@create')->name('admin.parkings.create');
		Route::post('estacionamientos', 'ParkingController@store')->name('admin.parkings.store');
		Route::get('estacionamientos/{estacionamiento}', 'ParkingController@finish')->name('admin.parkings.finish');
		Route::delete('estacionamientos', 'ParkingController@destroy')->name('admin.parkings.destroy');

		//Rutas de administración - inspectores
		Route::get('inspectores', 'InspectorController@index')->name('admin.inspectores.index');
		Route::get('inspectores/create', 'InspectorController@create')->name('admin.inspectores.create');
		Route::post('inspectores', 'InspectorController@store')->name('admin.inspectores.store');
		Route::get('inspectores/{inspector}', 'InspectorController@edit')->name('admin.inspectores.edit');
		Route::put('inspectores/{inspector}', 'InspectorController@update')->name('admin.inspectores.update');
		Route::delete('inspectores/{inspector}', 'InspectorController@destroy')->name('admin.inspectores.destroy');
	});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
