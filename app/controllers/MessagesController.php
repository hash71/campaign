<?php

class MessagesController extends \BaseController {	


	public function newcreate($token,$bp_mobile,$message){

		// valid pattern
		/*
		http://localhost/campaign/public/newapi/token/01910340450/u1 nazmul,25,m,01710340450,1001,5,1,81896021,2,y,1:2

		Length = 12(lowest possible valid message length)
		*/

		$pos = strpos($message, ' ');
		
		$message[$pos] = ',';
		
		return dd($message);
		
		$flag = 1;	

		$errors = array();

		$items_sold = array();

		$message = explode(",",$message);

		// return sizeof($message);
		// return dd($message);

		if(sizeof($message) < 12){

			$errors['numberOfFields'] = "Insufficient number of fields";

			$msg = new Message;

			$msg->error = json_encode($errors);

			$msg->save();


		}else{

			for ($i=0; $i < 11; $i++) { 

				$message[$i] = trim($message[$i]);

				if( strpos($message[$i], ':')  ){//if someone skips any field but adds extra in 1:2,3:4 then length will satisfy which is wrong

					$flag = 0;

					$errors['numberOfFields'] = "Insufficient number of fields";

					$msg = new Message;

					$msg->error = json_encode($errors);

					$msg->save();

					break;

				}
			}

			if($flag == 1){

				try{

					for ($i=11; $i<sizeof($message) ; $i++) { 

						$tmp = explode(':',$message[$i]);

						if( $tmp[0]*$tmp[1] == 0 ){//1:2,3:4 both of 1:2 must be integers
							
							$items_sold = array();
							
							break;
						}

						$items_sold[$tmp[0]] = $tmp[1];
					}

				}catch(Exception $e){

					$items_sold = array();

				}
				

				$msg = new Message;

				$msg->campaign_id = $message[0];			
				$msg->customer_name = $message[1];
				$msg->age = $message[2];
				$msg->gender = ucfirst($message[3]);
				$msg->customer_mobile = $message[4];
				$msg->thana_code = $message[5];
				$msg->education_id = $message[6];
				$msg->occupation_id = $message[7];
				$msg->coupon_code = $message[8];
				$msg->currently_used_product_table_id = $message[9];
				$msg->sales =ucfirst( $message[10]);	

				$msg->products_sold = json_encode($items_sold);
				$msg->bp_mobile = $bp_mobile;



				if($msg->campaign_id != 'u1'){

					$errors['campaign_id'] = 'Wrong Campaign Id';

				}

				if( !strlen($msg->customer_name) ){

					$errors['name_blank'] = "Customer name field blank";	

				}else{

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

					if($msg->gender !== 'm' && $msg->gender !=='f' && $msg->gender !== 'M' && $msg->gender !== 'F'){

						$errors['gender_type'] = "Customer gender type undefined";
					}
				}



				if( !strlen($msg->customer_mobile) ){

					$errors['mobile_blank'] = "Customer mobile field blank";

				}else{

					if( strlen($msg->customer_mobile) != 11 ){

						$errors['mobile_blank'] = "Customer mobile field not 11 digit";
					}
				}


				if( strlen($msg->thana_code)!=4 ){

					$errors['thana_code_format'] = "Thana code invalid format";

				}else{

					if( !in_array($msg->thana_code, DB::table('thana')->lists('thana_code'))){

						$errors['thana_code_not_found'] = "Thana code not in database";

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

					if( !in_array($msg->coupon_code, DB::table('coupon')->lists('coupon_code')) ){

						$errors['coupon_code_invalid'] = "Coupon Code not listed in Database";			

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

					if($msg->sales !='y' && $msg->sales !='n' && $msg->sales !='Y' && $msg->sales !='N'){

						$errors['sales_invalid'] = "Sales format invalid";
					}
				}


				if( !sizeof($items_sold) ){

					$errors['items_sold_blank'] = "Items sold field blank";

				}else{

					if(!json_decode($msg->products_sold)){

						$errors['items_sold_invalid'] = "Items sold field invalid format";
					}

				}
			}

		}	

		$msg->errors = json_encode($errors);

		// $msg->save();

		return dd($msg);


	}



}