<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => 'Naima',
            'name' => 'BKE',
            'email' => 'admin@gmail.com',
            'profession' => 'Administrateur',
            'image' => 'admin.png',
            'password' => Hash::make('12345678'),
        ]);
    }
}
