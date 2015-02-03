<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	protected $tables = ['bp_info','coupon'];

	protected $seeders = ['BpTableSeeder','CouponTableSeeder'];

	public function run()
	{
		Eloquent::unguard();

		$this->cleanDatabase();

		foreach ($this->seeders as $seed) {
			$this->call($seed);
		}
		
	}

	protected function cleanDatabase(){

		foreach ($this->tables as $table) {

			DB::statement('SET FOREIGN_KEY_CHECKS=0');

			DB::table($table)->truncate();

			DB::statement('SET FOREIGN_KEY_CHECKS=1');
		}

	}

}
