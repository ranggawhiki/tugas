<?php
use Illuminate\Foundation\Application;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { 
	return view('welcome');
});

Route::get('/country-lending-ibd', 'SiteController@getCountryIBD');
Route::get('/country-lending-idb', 'SiteController@getCountryIDB');
Route::get('/country-lending-idx', 'SiteController@getCountryIDX');
Route::get('/country-lending-nc', 'SiteController@getCountryNC');

Route::get('/search-country/{country}', 'SiteController@getCountry');

Route::get('/country-income/HIC', 'SiteController@getCountryIncome');
Route::get('/country-income/LIC', 'SiteController@getCountryIncome');
Route::get('/country-income/LMC', 'SiteController@getCountryIncome');
Route::get('/country-income/LMY', 'SiteController@getCountryIncome');
Route::get('/country-income/MIC', 'SiteController@getCountryIncome');
Route::get('/country-income/NOC', 'SiteController@getCountryIncome');
Route::get('/country-income/OEC', 'SiteController@getCountryIncome');
Route::get('/country-income/UMC', 'SiteController@getCountryIncome');

Route::any('{catchall}', function() {
  echo "Page Not Found";
})->where('catchall', '.*');




