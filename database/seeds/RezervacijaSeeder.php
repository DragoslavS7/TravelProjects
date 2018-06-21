<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rezervacijas')->insert([
            'ImeKorisnika' => 'Admin',
            'PrezimeKorisnika' => 'Admin',
            'JMBG' => '0125346569512',
            'Telefon' => '',
            'Od' => '2018-02-07 08:42:27',
            'Do' => '2018-02-22 08:42:27',
            'Adresa' => 'Rumenacki put',
            'Soba' => '2',
            'Aranzman' => 'polupansion',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);

        DB::table('rezervacijas')->insert([
            'ImeKorisnika' => 'Milan',
            'PrezimeKorisnika' => 'Milanovic',
            'JMBG' => '0125434569512',
            'Telefon' => '',
            'Od' => '2018-02-07 09:42:27',
            'Do' => '2018-04-17 18:42:27',
            'Adresa' => 'Rumenacki put',
            'Soba' => '3',
            'Aranzman' => 'pansion',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);
    }
}
