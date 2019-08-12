<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleActionSeed extends Seeder
{
    public function run()
    {
        $roleActions = [
            [
                'role_id' => 1,
                'action_id' => 2
            ],
            [
                'role_id' => 1,
                'action_id' => 3
            ],
            [
                'role_id' => 1,
                'action_id' => 4
            ],
            [
                'role_id' => 1,
                'action_id' => 5
            ],
            [
                'role_id' => 1,
                'action_id' => 6
            ],
            [
                'role_id' => 1,
                'action_id' => 7
            ],
            [
                'role_id' => 1,
                'action_id' => 8
            ],
            [
                'role_id' => 1,
                'action_id' => 9
            ],
            [
                'role_id' => 1,
                'action_id' => 10
            ],
            [
                'role_id' => 1,
                'action_id' => 11
            ],
            [
                'role_id' => 1,
                'action_id' => 12
            ],
            [
                'role_id' => 1,
                'action_id' => 13
            ],
            [
                'role_id' => 1,
                'action_id' => 14
            ],
            [
                'role_id' => 2,
                'action_id' => 2
            ],
            [
                'role_id' => 2,
                'action_id' => 3
            ],
            [
                'role_id' => 2,
                'action_id' => 6
            ],
            [
                'role_id' => 2,
                'action_id' => 7
            ],
            [
                'role_id' => 2,
                'action_id' => 9
            ],
            [
                'role_id' => 2,
                'action_id' => 12
            ],
            [
                'role_id' => 2,
                'action_id' => 13
            ]
        ];
        DB::table("role_action")->insert($roleActions);
    }
}
