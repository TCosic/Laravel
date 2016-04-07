<?php

use Illuminate\Database\Seeder;

class TelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('tels')->insert([
			'phonenumber' => '06-12345678',
			'contact_id' => 1
		]);
    }
}
