<?php

use Illuminate\Database\Seeder;

class ContactRegelAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_regel_addresses')->insert([
			'address_id' => 1,
			'contact_id' => 1
		]);

		DB::table('contact_regel_addresses')->insert([
			'address_id' => 2,
			'contact_id' => 1
		]);
    }
}
