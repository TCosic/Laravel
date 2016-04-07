<?php

use Illuminate\Database\Seeder;

class BanknumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('banknumbers')->insert([
			'number' => '123456789',
			'contact_id' => 1
		]);
    }
}
