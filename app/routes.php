<?php




use Faker\Factory as Faker;




Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');

Route::controller('messages','MessagesController');





// Route::get('index',function(){
	
// 	return View::make('index');

// });

Route::get('/', function(){	

	$x = NULL;
	return sizeof($x);
	$x= json_encode($x);
	return dd(json_decode($x));

	$msg = new Message;
	$msg->save();
	return View::make('hello');
});

Route::get('token',function(){
	$key = 'analyzen';
	$string = 'access_token';

	$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
	$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

	return $decrypted." = ".$encrypted." size = ".strlen($encrypted);
	var_dump($encrypted);
	var_dump($decrypted);
});



