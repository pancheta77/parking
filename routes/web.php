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
		Route::get('historial', 'ParkingController@historial')->name('admin.parkings.historial');
		Route::get('historial/estacionamientosPdf', 'ParkingController@pdf')->name('admin.parkings.pdf');

		//Rutas de administración - inspectores
		Route::get('inspectores', 'InspectorController@index')->name('admin.inspectores.index');
		Route::get('inspectores/create', 'InspectorController@create')->name('admin.inspectores.create');
		Route::post('inspectores', 'InspectorController@store')->name('admin.inspectores.store');
		Route::get('inspectores/{inspector}', 'InspectorController@edit')->name('admin.inspectores.edit');
		Route::put('inspectores/{inspector}', 'InspectorController@update')->name('admin.inspectores.update');
		Route::delete('inspectores/{inspector}', 'InspectorController@destroy')->name('admin.inspectores.destroy');

		//Rutas de administración - zonas
		Route::get('zonas', 'ZonaController@index')->name('admin.zonas.index');
		Route::get('zonas/create', 'ZonaController@create')->name('admin.zonas.create');
		Route::post('zonas', 'ZonaController@store')->name('admin.zonas.store');
		Route::get('zonas/{zona}', 'ZonaController@edit')->name('admin.zonas.edit');
		Route::put('zonas/{zona}', 'ZonaController@update')->name('admin.zonas.update');
		Route::delete('zonas/{zona}', 'ZonaController@destroy')->name('admin.zonas.destroy');

		//Rutas de administración - tarifas
		Route::get('tarifas', 'TarifaController@index')->name('admin.tarifas.index');
		Route::get('tarifas/create', 'TarifaController@create')->name('admin.tarifas.create');
		Route::post('tarifas', 'TarifaController@store')->name('admin.tarifas.store');
		Route::get('tarifas/{tarifa}', 'TarifaController@edit')->name('admin.tarifas.edit');
		Route::put('tarifas/{tarifa}', 'TarifaController@update')->name('admin.tarifas.update');
		Route::delete('tarifas/{tarifa}', 'TarifaController@destroy')->name('admin.tarifas.destroy');
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
