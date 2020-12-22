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
    $period = CarbonPeriod::create('2021-01-01','2021-12-31');
    $days = []  ;
    $months = []; 
    $year = [];
    foreach ( $period  as  $day ) {
        array_push($months, $day->format("m"));
    }
    $months_year = array_unique($months);
    foreach ( $months_year as $month) {
        foreach ( $period  as  $day ) {
            if($day->format("m")==$month){
                array_push($days, $day);
            }
        }
        array_push($year, $days);
        $days = [];
    }   
    #dd($period->toArray()[0]->format(' F '));
    return view('calendar', ['year' => $year]);
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

