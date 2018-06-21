<?php

use Illuminate\Database\Seeder;

class DestinacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinacijas')->insert([
            'Grad' => 'Beograd',
            'Zemlja' => 'Srbija',
            'Opisi' => 'Destinacija',
            'Latitude' => '44.30812668488613',
            'Longitude' => '21.189193725585938',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);

        DB::table('destinacijas')->insert([
            'Grad' => 'Novi Sad',
            'Zemlja' => 'Srbija',
            'Opisi' => 'Odaberite destinaciju',
            'Latitude' => '46.08847179577592',
            'Longitude' => '12.993392944335938',
            'created_at' => '2017-11-07 08:42:27',
            'updated_at' => '2017-12-17 09:42:27'
        ]);

        DB::table('destinacijas')->insert([
            'Grad' => 'Nis',
            'Zemlja' => 'Srbija',
            'Opisi' => 'Destinacija',
            'Latitude' => '46.70973594407157',
            'Longitude' => '9.214096069335938',
            'created_at' => '2018-02-15 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);
    }
}
