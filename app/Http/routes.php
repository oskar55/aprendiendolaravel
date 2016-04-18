<?php

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


//rutas con parametros en la url
// Route::get('articulos/{nombre?}', function($nombre="no coloco nombre"){
// 	echo "su nobre es el siguiente: ".$nombre;
// });

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function(){
	Route::resource('users', 'UsersController');
});


// //grupo de rutas con prefijo
// Route::group(['prefix'=>'articles'],function(){
	
// 	Route::get('view/{id}',[
// 		'uses' => 'TestController@view',
// 		'as' => 'articlesView'
// 	]); 

// });


