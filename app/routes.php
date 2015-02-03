<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('api/{message}', function($message){

	$message = explode(",",$message);

	for ($i=0; $i < count($message) ; $i++) { 
		$message[$i] = trim($message[$i]);
	}

	



	return $message;

});

Route::get('/', function()
{
	return View::make('hello');
});



