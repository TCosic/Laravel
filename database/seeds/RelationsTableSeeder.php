<?php

use Illuminate\Database\Seeder;

class RelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('relations')->insert([
			'type' => 'friend'
		]);
    }
}
