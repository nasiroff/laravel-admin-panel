<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleTypes = [
            [
                'role_type' => 'ROLE_ADMIN',
            ],
            [
                'role_type' => 'ROLE_MANAGER',
            ]
        ];
        \App\Models\Role::insert($roleTypes);
    }
}
