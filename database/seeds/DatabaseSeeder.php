<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RelationsTableSeeder::class);
         $this->call(AddressesTableSeeder::class);
         $this->call(ContactsTableSeeder::class);
         $this->call(ContactRegelAddressesTableSeeder::class);
         $this->call(BanknumbersTableSeeder::class);
         $this->call(EmailsTableSeeder::class);
         $this->call(TelsTableSeeder::class);
    }
}
