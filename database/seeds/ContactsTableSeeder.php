<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contact = DB::table('contacts')->insert([
            'voornaam' => "Bart",
            'achternaam' => "van Venrooij",
            'geboortedatum' => '1992-05-27',
            'opnemen_kalender' => true,
            'opmerking' => 'Dit is een opmerking',
			'relation_id' => 1
        ]);
    }
}
