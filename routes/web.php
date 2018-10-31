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
    return view('pages.home');
});


// Route::get('home/show', 'HomeController@show');
Route::get('pricing', 'PricingController@show');
Route::get('about', 'AboutController@show');
Route::get('services', 'ServicesController@show');
Route::get('vacancies', 'VacanciesController@show');

Route::get('contact', 'ContactController@show');
Route::post('contact/store',  'ContactController@store');
Route::get('contact/again', 'ContactController@again');
