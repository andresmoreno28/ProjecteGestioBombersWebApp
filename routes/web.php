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

Route::resource('user', 'UserController');
Route::resource('container', 'ContainerController');
Route::get('location/delete/{id}', 'LocationController@destroy');
Route::resource('location', 'LocationController');
Route::resource('material', 'MaterialController');
Route::get('region/delete/{id}', 'RegionController@destroy');
Route::resource('region', 'RegionController');
Route::resource('vehicle', 'VehicleController');
Route::get('user/delete/{id}', 'UserController@destroy');
Route::get('vehicle/delete/{id}', 'VehicleController@destroy');
Route::get('vehicle/qr/{id}', 'VehicleController@qr');
Route::get('vehicle/material/{id}', 'VehicleController@material');

// Backup routes
Route::get('backup', 'BackupController@index')->name('backup');
Route::get('backup/create', 'BackupController@create')->name('bcreate');
Route::get('backup/download/{file_name}', 'BackupController@download');
Route::get('backup/delete/{file_name}', 'BackupController@delete');
// Dompdf route
/*Route::get('pdf', function() {
	$pdf = PDF::loadView('vehicles/report');
	return $pdf->download('informe.pdf');
})->name('pdf');*/

Route::get('/informes', 'PDFController@index')->name('report');
