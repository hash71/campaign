<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CouponTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			DB::table('coupon')->insert([
				'coupon_code'=>$faker->randomNumber($nbDigits = 8),				
			]);
		}
	}

}