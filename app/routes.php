<?php




use Faker\Factory as Faker;




Route::get('newapi/{token}/{bp_mobile}/{message}','MessagesController@newcreate');

Route::controller('messages','MessagesController');





// Route::get('index',function(){
	
// 	return View::make('index');

// });

Route::get('/', function(){	

	// Start date
	 $date = '2015-01-01';
	 // End date
	 $end_date = '2015-03-01';
	 
	 $arr = array();
	 // return strtotime($date);
	 while (strtotime($date) <= strtotime($end_date)) {
	 	array_push($arr, $date );
	 	$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
	 	
	 }
	 return dd($arr);
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



