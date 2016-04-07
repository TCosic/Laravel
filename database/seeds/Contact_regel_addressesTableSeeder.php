<?php

use Illuminate\Database\Seeder;

class Contact_regel_addressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('contact_regel_addresses')->insert([
            'address_id' => 1,
            'contact_id' => 1
        ]);
    }
}
