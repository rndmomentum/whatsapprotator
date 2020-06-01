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

use Illuminate\Support\Facades\Hash;


Route::get('pass', function () {
    echo Hash::make('test12345');
});

/*
Route::get('pm', function () {
    return view('welcome');
});
*/

######################## Admin Controller ########################

Route::get('admin/login', 'AdminController@login');
Route::post('admin/login/checklogin', 'AdminController@checklogin');
Route::get('admin/logout', 'AdminController@logout');

######################## Admin Controller ########################


######################## Home Controller ########################

Route::get('admin', 'HomeController@index');
Route::get('admin/marketing', 'HomeController@marketing');

######################## Home Controller ########################


######################## Whatsapp Controller ########################

Route::get('admin/marketing/whatsapp', 'WhatsappController@index');
Route::post('rotate', 'WhatsappController@whatsapprotate');

// Delete
Route::get('admin/marketing/whatsapp/delete/{id}','WhatsappController@destroy');

Route::post('admin/marketing/whatsapp/post', 'WhatsappController@store');

######################## Whatsapp Controller ########################


######################## Lead Controller ########################

Route::get('/', 'LeadController@create');
Route::get('admin/marketing/whatsapp/lead', 'LeadController@index');

// Delete
Route::get('admin/marketing/whatsapp/lead/delete/{id}', 'LeadController@destroy');

######################## Lead Controller ########################