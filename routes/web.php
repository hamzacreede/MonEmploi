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
    return view('acculier');
})->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){

	return view('home') ;
})->middleware('auth');

Route::get('/acculier', function(){

	return view('acculier') ;

})->middleware('auth');



Route::get('/test', function(){

	return view('test') ;
});


Route::get('/algo', 'AlgoController@FillEmploi');




Route::get('/show', 'EnseignantController@getshow')->middleware('auth');

Route::get('/add', 'EnseignantController@getadd')->middleware('auth');
	

Route::post('/add', 'EnseignantController@AddEnseignant')->middleware('auth');


Route::post('/show', 'EnseignantController@getshow')->middleware('auth');




Route::get('/modules', 'TestController@GetEmploi')->middleware('auth');

Route::post('/modules', 'TestController@PostEmploi')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
