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


//grupo de rutas con prefijo
Route::group(['prefix'=>'articles'],function(){
	Route::get('view/{article?}', function ($article = "vacio") {
	    echo $article;
	});	
});


Route::get('/', function () {
    return view('welcome');
});
