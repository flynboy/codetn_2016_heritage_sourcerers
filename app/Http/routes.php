<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StaticPagesController@welcome');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::auth();
  Route::get('/', 'StaticPagesController@welcome');
  
  Route::get('/hhsBlueprints', 'hhsBlueprintsController@hhsBlueprints');
  Route::get('/hhsBlueprints/createOne', 'hhsBlueprintsController@createOne');
  Route::get('/hhsBlueprints/admin', 'hhsBlueprintsController@admin');
  Route::post('/hhsBlueprints/admin/dataNew', array('uses' => 'hhsBlueprintsController@dataNew'));
  Route::get('/gotime', 'StaticPagesController@gotime');
  Route::get('/testMap', 'StaticPagesController@testMap');
  Route::get('/myProgress', 'StaticPagesController@myProgress');
  Route::get('/help', 'StaticPagesController@help');
  Route::post('/addPoints', 'StaticPagesController@addPoints');
  Route::get('/longestMap', 'StaticPagesController@longMap');
  Route::get('/mediumMap', 'StaticPagesController@mediumMap');
  Route::get('/shortestMap', 'StaticPagesController@shortMap');
  Route::get('/check', 'StaticPagesController@check');
  Route::get('/directionsLong', 'StaticPagesController@directionsLong');
  Route::get('/directionsShort', 'StaticPagesController@directionsShort');
  Route::get('/directionsMedium', 'StaticPagesController@directionsMedium');
  Route::get('/directionsLong', 'StaticPagesController@directionsLong');
  Route::get('/congrats', 'StaticPagesController@congrats');
  //Route::get('/mapTest'), 'testMap.blade.php@mapTest');
  //Passes the data inserted from the admin page back to the database.
  //Route::post('/admin','hhsBlueprintsController@dataNew');
  
});
