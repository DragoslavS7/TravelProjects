<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SobeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sobes')->insert([
            'BrojKreveta' => '2',
            'Opis' => 'da li imate slobodnih mesta?',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);

        DB::table('sobes')->insert([
            'BrojKreveta' => '4',
            'Opis' => 'soba',
            'created_at' => '2017-12-07 08:42:27',
            'updated_at' => '2018-02-14 18:42:27'
        ]);

        DB::table('sobes')->insert([
            'BrojKreveta' => '3',
            'Opis' => 'koliko kreveta ima?',
            'created_at' => '2018-02-07 09:42:27',
            'updated_at' => '2018-02-15 08:42:27'
        ]);
    }
}
