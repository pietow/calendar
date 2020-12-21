<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

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
    #$period = CarbonPeriod::create('2021-01-01','2021-12-31');
    #dd($period->toArray()[0]->format(' F '));
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
