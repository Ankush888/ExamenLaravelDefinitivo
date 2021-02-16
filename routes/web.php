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

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::get('/', "App\Http\Controllers\MainController@inicio");
    Route::get('/inicio', "App\Http\Controllers\MainController@inicio");
    Route::get('/migraciones', "App\Http\Controllers\MainController@migraciones");
    Route::get('/seeders', "App\Http\Controllers\MainController@seeders");
    Route::get('/mail', "App\Http\Controllers\MainController@mail");
    
    
    // Aqui vinculamos los links a las distinas paginas:
    Route::any('/', array('as' => "inicio", 'uses' => "App\Http\Controllers\MainController@inicio"));
    Route::any('/inicio', array('as' => "inicio", 'uses' => "App\Http\Controllers\MainController@inicio"));
    Route::any('/migraciones', array('as' => "migraciones", 'uses' => "App\Http\Controllers\MainController@migraciones"));
    Route::any('/seeders', array('as' => "seeders", 'uses' => "App\Http\Controllers\MainController@seeders"));
    Route::any('/mail', array('as' => "mail", 'uses' => "App\Http\Controllers\MainController@mail"));

 
    