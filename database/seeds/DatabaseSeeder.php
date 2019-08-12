<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            RoleSeed::class,
            ActionSeed::class,
            RoleActionSeed::class,
            UserSeed::class,
            DepartmentSeed::class,
            EmployeeSeed::class
        ]);
    }
}
