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
        $this->call(UserSeeder::class);
        $this->call(AranzmanSeeder::class);
        $this->call(DestinacijaSeeder::class);
        $this->call(MailSeeder::class);
        $this->call(RadnikSeeder::class);
        $this->call(RezervacijaSeeder::class);
        $this->call(SobeSeeder::class);
    }
}
