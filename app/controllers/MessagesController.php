<?php

class MessagesController extends \BaseController {

	public function create($message){

		// return dd("hello");


		$items_sold = array();

		$message = explode(",",$message);

		for ($i=0; $i < count($message) ; $i++) { 

			$message[$i] = trim($message[$i]);

			if(strpos($message[$i], ':')){

				$tmp = explode(':',$message[$i]);

				$items_sold[$tmp[0]] = $tmp[1];

				unset($message[$i]);
			}
		}


			// return sizeof($message);
			// return dd($message);

		$validation = Validator::make(Input::all(),Message::$rules);			

		$msg = new Message;

		$msg->campaign_id = $message[0];				 
		$msg->access_token = $message[1];
		$msg->customer_name = $message[2];
		$msg->age = $message[3];
		$msg->gender = $message[4];
		$msg->customer_mobile = $message[5];
		$msg->thana_code = $message[6];
		$msg->education_id = $message[7];
		$msg->occupation_id = $message[8];
		$msg->coupon_code = $message[9];
		$msg->currently_used_product_table_id = $message[10];
		$msg->sales = $message[11];				
		$msg->products_sold = $items_sold;
		$msg->bp_number = end($message);

				// if($validation->fails()){

				// 	$msg->error = $validation->messages();

				// }

		return dd($msg);

		$msg->save();



		return "insert successful";




	}


	public function newcreate($token,$bp_mobile,$message){
			
		// return dd($message);

		$errors = array();

		$items_sold = array();

		$message = explode(",",$message);

		if(sizeof($message) < 11){//validation
			$errors['numberOfFields'] = "Insufficient number of fields";
		}

		for ($i=0; $i < 11; $i++) { //till product sold field

			$message[$i] = trim($message[$i]);
		}
		
		

		for ($i=11; $i<sizeof($message) ; $i++) { //product sold starts from 11 no. field of msg
			
			$tmp = explode(':',$message[$i]);

			$items_sold[$tmp[0]] = $tmp[1];
		}	
		// return dd($message);
		// return dd($items_sold);
		//validate access token	
			
		// $validation = Validator::make(Input::all(),Message::$rules);			

		$msg = new Message;

		$msg->campaign_id = $message[0];			
		$msg->customer_name = $message[1];
		$msg->age = $message[2];
		$msg->gender = $message[3];
		$msg->customer_mobile = $message[4];
		$msg->thana_code = $message[5];
		$msg->education_id = $message[6];
		$msg->occupation_id = $message[7];
		$msg->coupon_code = $message[8];
		$msg->currently_used_product_table_id = $message[9];
		$msg->sales = $message[10];	

		$msg->products_sold = json_encode($items_sold);
		$msg->bp_mobile = $bp_mobile;

		// return dd($msg);
		// return strlen($msg->customer_mobile);

		if($msg->campaign_id != 'u1'){
			$errors['campaign_id'] = 'Wrong Campaign Id';
		}
		
		if( !strlen($msg->customer_name) ){
			
			$errors['name_blank'] = "Customer name field blank";	

		}else{

			if(!ctype_alpha($msg->customer_name)){
				$errors['name_alpha'] = "Customer name not alpha";
			}

			if( strlen($msg->customer_name) > 15 ){
				$errors['name_size'] = "Customer name more than 15 characters";
			}
		}


		if(!strlen($msg->age)){

			$errors['age_blank'] = "Customer age field blank";

		}else{

			if( !ctype_digit($msg->age) ){
				$errors['age_numeric'] = "Customer age not numeric";
			}

			if( $msg->age < 10 || $msg->age > 100  ){
				$errors['age_limit'] = "Customer age not in limit";
			}
		}


		if(!strlen($msg->gender)){
			
			$errors['gender_blank'] = "Customer gender field is blank";

		}else{

			if($msg->gender !== 'm' && $msg->gender !=='f'){
				$errors['gender_type'] = "Customer gender type undefined";
			}
		}

		

		if( !strlen($msg->customer_mobile) ){
			
			$errors['mobile_blank'] = "Customer mobile field blank";

		}else{

			if( strlen($msg->customer_mobile) != 11 ){
				$errors['mobile_blank'] = "Customer mobile field invalid";
			}
		}
		

		if( !strlen($msg->thana_code) ){
			
			$errors['thana_code_blank'] = "Thana code blank";

		}else{
			
			if( !in_array($msg->thana_code, DB::table('thana')->lists('thana_code'))){
				$errors['thana_code_invalid'] = "Thana code not in database";
			}
		}

		

		if(!strlen($msg->education_id)){

			$errors['education_blank'] = "Education field blank";

		}else{

			if($msg->education_id < 1 || $msg->education_id >5){
				$errors['education_range'] = "Education value not in range";
			}
		}

		

		if(!strlen($msg->occupation_id)){
		
			$errors['occupation_blank'] = "Occupation field blank";

		}else{

			if($msg->occupation_id < 1 || $msg->occupation_id > 4 ){
				$errors['occupation_range'] = "Occupation value not in range";
			}
		}

		

		if(!strlen($msg->coupon_code)){
			
			$errors['coupon_code_blank'] = "Coupon Code Blank";			

		}else{
			
			if( !in_array($msg->coupon_code, DB::table('coupon')->lists('coupon_code'))){
				$errors['coupon_code_invalid'] = "Coupon Code Invalid";			
			}
		}

		if(!strlen($msg->currently_used_product_table_id)){

			$error['currently_using'] = "Currently Using Field blank";

		}else{

			if($msg->currently_used_product_table_id < 1 || $msg->currently_used_product_table_id > 4){

				$error['currently_using_invalid'] = "Currently Using Product Not in Range";		
			}
		}

		if(!strlen($msg->sales)){

			$errors['sales_blank'] = "Sales Field Blank";

		}else{
			
			if($msg->sales !='y' && $msg->sales !='n'){

				$errors['sales_invalid'] = "Sales invalid format";
			}
		}


		if( !sizeof($items_sold) ){

			$errors['items_sold_blank'] = "Items sold field blank";

		}else{
			
			if(!json_decode($msg->products_sold)){
				
				$errors['items_sold_invalid'] = "Items sold field invalid format";
			}

		}

		return dd($errors);



// 
		








				// if($validation->fails()){

				// 	$msg->error = $validation->messages();

				// }

		// return dd($msg);

		// $msg->save();



		return "insert successful";




	}



}