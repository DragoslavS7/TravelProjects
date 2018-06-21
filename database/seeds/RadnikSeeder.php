<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class RadnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('radniks')->insert([
            'RadnikIme' => 'Admin',
            'Sifra' => '123456',
            'RadnikJMBG' => '0125478369512',
            'Adresa' => 'Novosadskog sajma',
            'Telefon' => '021543094',
            'SSprema' => 'Visa skola',
            'Pozicija' => 'IT',
            'created_at' => '2017-12-07 18:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);

        DB::table('radniks')->insert([
            'RadnikIme' => 'Milan',
            'Sifra' => 'wd58235s',
            'RadnikJMBG' => '0125478342312',
            'Adresa' => 'Rumenacki put',
            'Telefon' => '021546214',
            'SSprema' => 'Srednja skola',
            'Pozicija' => 'IT',
            'created_at' => '2017-02-07 16:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);

        DB::table('radniks')->insert([
            'RadnikIme' => 'Dragan',
            'Sifra' => '458168',
            'RadnikJMBG' => '0125477669512',
            'Adresa' => 'Bulevar Oslobodjenja',
            'Telefon' => '021543784',
            'SSprema' => 'Visa skola',
            'Pozicija' => 'IT',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);
    }
}
