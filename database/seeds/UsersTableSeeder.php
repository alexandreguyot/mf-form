<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Florent Morel',
            'email' => 'florent.morel@mf-distribution.fr',
            'password' => bcrypt('secret'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Alexandre Guyot',
            'email' => 'a.pro.guyot@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Guillaume Sourisseau',
            'email' => 'sourriseauguillaume@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => now()
        ]);

        DB::table('users')->insert([
            'name' => 'Essaie Essaie',
            'email' => 'essaie@essaie.fr',
            'password' => bcrypt('secret'),
            'created_at' => now()
        ]);
    }
}
