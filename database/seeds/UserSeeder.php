<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10) . '@hotmail.com',
            'avatar' => '/uploads/avatars/default.jpg',
            'password' => bcrypt('secret'),
            'created_at' => '2018-02-07 09:42:27',
            'updated_at' => '2018-02-15 08:42:27'
        ]);
    }
}
