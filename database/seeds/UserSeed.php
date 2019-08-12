<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Vuqar',
                'email' => 'v.nesirov91@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('321654987'),
                'role_id' => 1
            ],
            [
                'name' => 'Vuqar',
                'email' => 'v.nesirov@gmail.com',
                'password' => \Illuminate\Support\Facades\Hash::make('321654987'),
                'role_id' => 2
            ]
        ];

        App\Models\User::insert($users);

    }
}
