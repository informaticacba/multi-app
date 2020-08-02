<?php

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
            'name' => Str::random(10),
            'email' => 'corpjorge@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(4).'@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(5).'@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
