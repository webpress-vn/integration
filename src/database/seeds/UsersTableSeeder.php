<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            [
                'email'        => 'admin@vicoders.com',
                'username'     => Str::random(5),
                'password'     => Hash::make('secret'),
                'verify_token' => Hash::make('admin@vicoders.com'),
            ],
            [
                'email'        => 'huybq@vicoders.com',
                'username'     => Str::random(5),
                'password'     => Hash::make('secret'),
                'verify_token' => Hash::make('huybq@vicoders.com'),
            ],
            [
                'email'        => 'vicoders@vicoders.com',
                'username'     => Str::random(5),
                'password'     => Hash::make('secret'),
                'verify_token' => Hash::make('vicoders@vicoders.com'),
            ],
        ]);
    }

}
