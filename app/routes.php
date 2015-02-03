<?php


/*
campaign,token,name,age,gender,mobile,thana,(district),educational_qualification,occupation,coupon,currently_used_product,sales,product:quantity,sender_number
*/


/*
u1,123456789,nazmul,25,male,01710340450,0024,5,1,123456,2,y,1:2,3:4,01710450340
*/

/*
http://localhost/campaign/public/newapi/01710340450/token/u1,123456789,nazmul,25,male,01710340450,0024,5,1,123456,2,y,1:2,3:4
*/

// valid
/*
http://localhost/campaign/public/newapi/01710340450/token/u1,nazmul,25,male,01710340450,0024,5,1,123456,2,y,1:2,3:4
*/


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



Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');



Route::get('api/{message}','MessagesController@create' );

Route::controller('messages','MessagesController');

Route::get('/', function()
{
	return View::make('hello');
});



