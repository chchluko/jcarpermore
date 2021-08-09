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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('medicos/create', 'MedicController@create')->name('nuevomedico');

Route::resource('registro', MedicController::class);
Route::resource('labs', LabController::class);


Route::get('usernew', function(){
	$user = new App\User;
	$user->name = 'Carpermor';
	$user->username = 1000;
	$user->email = 'admin@carpermor.com.mx';
	$user->password = bcrypt('4545');
	$user->save();

	return $user;
});

Route::get('sync', 'MedicController@sync' );
Route::get('aviso_privacidad', 'MedicController@aviso' );
