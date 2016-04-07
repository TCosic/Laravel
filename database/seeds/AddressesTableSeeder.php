<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
			'huisnummer' => 10,
			'toevoeging' => 'a',
			'straatnaam' => 'poortmolen',
			'postcode' => '1234AB',
			'plaats' => 'Capelle aan den IJssel'
		]);

		DB::table('addresses')->insert([
			'huisnummer' => 11,
			'toevoeging' => 'b',
			'straatnaam' => 'windmolen',
			'postcode' => '4321AB',
			'plaats' => 'Capelle aan den IJssel'
		]);
    }
}
