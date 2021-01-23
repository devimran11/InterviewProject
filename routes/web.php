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
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'Backend\BackendSetupController@index')->name('home');
Route::get('/view-address', 'Backend\BackendSetupController@viewAddress')->name('view.address');
Route::get('/add-address', 'Backend\BackendSetupController@addAddress')->name('add.address');
Route::post('/save-address', 'Backend\BackendSetupController@saveAddress')->name('save.address');
Route::get('/edit-address/{id}', 'Backend\BackendSetupController@editAddress')->name('edit.address');
Route::post('/update-address/{id}', 'Backend\BackendSetupController@updateAddress')->name('update.address');
Route::get('/delete-address/{id}', 'Backend\BackendSetupController@deleteAddress')->name('delete.address');
