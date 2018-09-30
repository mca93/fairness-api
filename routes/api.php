<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Get List of Countries;
Route::get('countries', 'Admin\CountryController@index');

// Show a Single Country;
Route::get('country/{country_id}', 'Admin\CountryController@show');

// Add a new Country;
Route::post('country', 'Admin\CountryController@store');

// Add a new Country;
Route::put('country', 'Admin\CountryController@store');

// Add a new Country;
Route::delete('country/{country_id}', 'Admin\CountryController@destroy');

// List of company types
Route::get('company_types', 'Admin\CompanyTypeController@index');
Route::get('company_type/{company_type_id}', 'Admin\CompanyTypeController@show');
