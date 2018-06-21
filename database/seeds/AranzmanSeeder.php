<?php

use Illuminate\Database\Seeder;

class AranzmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aranzmen')->insert([
            'Destinacija' => 'PARIZ',
            'Kategorija' => 'Kategorija',
            'Prevoz' => 'Avion',
            'Hotel' => 'Hilton',
            'Cena' => '200',
            'Viza' => 'DA',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);

        DB::table('aranzmen')->insert([
            'Destinacija' => 'Budimpesta',
            'Kategorija' => 'Kategorija',
            'Prevoz' => 'Autobus',
            'Hotel' => 'Hilton',
            'Cena' => '270',
            'Viza' => 'NE',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2017-07-12 10:42:27'
        ]);

        DB::table('aranzmen')->insert([
            'Destinacija' => 'Rim',
            'Kategorija' => 'Kategorija',
            'Prevoz' => 'Autobus',
            'Hotel' => 'Hilton',
            'Cena' => '400',
            'Viza' => 'DA',
            'created_at' => '2017-11-14 08:42:27',
            'updated_at' => '2017-12-27 12:42:27'
        ]);

    }
}
