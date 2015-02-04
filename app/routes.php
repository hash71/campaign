<?php

Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');

Route::controller('messages','MessagesController');

Route::get('/', function()
{	
	// return ""*"";
	$msg = new Message;
	$msg->save();
	return View::make('hello');
});



