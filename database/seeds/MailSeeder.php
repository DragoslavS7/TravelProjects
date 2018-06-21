<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('emails')->insert([
            'emaill' => 'gagi.predojevic@gmail.com',
            'vise' => 'Test mail',
            'created_at' => '2018-02-07 08:42:27',
            'updated_at' => '2018-02-07 08:42:27'
        ]);


    }
}
