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


Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('login', 'UserController@authenticate');
Route::get('open', 'DataController@open');

Route::get('getprojects', 'DataController@projectShow');
Route::post('getprojectsDetails', 'DataController@projectDetailsShow');


//Route::post('createUser', 'DataController@createUser');



Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('user', 'UserController@getAuthenticatedUser');
    Route::post('supplier', 'UserController@supplier_save');

    Route::get('supplier', 'UserController@supplier_show');


    Route::get('dashboardhome', 'UserController@getDashboardHome');

    Route::post('factorypart1', 'UserController@FactoryPart1');
    Route::post('factorypart2', 'UserController@FactoryPart2');

    Route::post('manufacture/make', 'UserController@ManufactureMakeProduct');

    Route::post('manufacture/ship', 'UserController@ManufactureShip');

    Route::post('wholesaler', 'UserController@WholesalerPart1');
    Route::post('wholesaler/save', 'UserController@WholesalerPart2');

	Route::post('dnasave', 'UserController@dna_save');


	Route::post('ReportUserList', 'UserController@ReportUserList');
	Route::post('ReportApproveUser', 'UserController@ReportApproveUser');
	Route::post('ReportScanCode', 'UserController@ReportScanCode');
	Route::post('ReportDNAList', 'UserController@ReportDNAList');
	Route::post('ReportExceptionList', 'UserController@ReportExceptionList');

	Route::post('userhistory', 'UserController@userhistory');





    Route::get('closed', 'DataController@closed');
});
