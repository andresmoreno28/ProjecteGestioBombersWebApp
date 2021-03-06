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



Route::get('/', function () {
    return view('auth.login');
});

    //

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/vehicle/{id}', 'HomeController@filtre');

// Gestió de l'usuari
Route::resource('user', 'UserController');

// Gestió de poblacions
//Route::get('location/delete/{id}', 'LocationController@destroy');
//Route::resource('location', 'LocationController');

// Gestió de regions
Route::get('region/delete/{id}', 'RegionController@destroy');
Route::resource('region', 'RegionController');

// Gestió de vehicles
Route::resource('vehicle', 'VehicleController');
Route::get('user/delete/{id}', 'UserController@destroy');
Route::get('vehicle/delete/{id}', 'VehicleController@destroy');
Route::get('vehicle/qr/{id}', 'VehicleController@qr');
Route::get('vehicle/material/{id}', 'VehicleController@material');
Route::delete('vehicle/{id}/del', 'VehicleController@destroy');

// Gestió del material
Route::resource('material', 'MaterialController');

// Gestió de Contenidors
Route::resource('containers', 'ContainerController');
Route::resource('container/types', 'ContainerNameController');

// Backup routes
Route::get('backup', 'BackupController@index')->name('backup');
Route::get('backup/create', 'BackupController@create')->name('bcreate');
Route::get('backup/download/{file_name}', 'BackupController@download');
Route::get('backup/delete/{file_name}', 'BackupController@delete')->name('dbackup');

// Dompdf route
Route::get('informes/{id}', 'PDFController@crearPDF')->name('report');

// Inventory route from mobile app
Route::get('inventory', 'InventoryController@update')->name('inventory');
