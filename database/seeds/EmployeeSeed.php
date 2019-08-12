<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeeSeed extends Seeder
{
    private $employees = [];
    public function run()
    {
        $this->createFakeEmployees();

        \App\Models\Employee::insert($this->employees);
    }

    public function createFakeEmployees(){
        $faker = Faker::create();


        for ($i = 0; $i < 100; $i++) {
            $this->employees[$i]['first_name'] = $faker->firstName;
            $this->employees[$i]['last_name'] = $faker->lastName;
            $this->employees[$i]['department_id'] = $faker->numberBetween(1, 50);
            $this->employees[$i]['email'] = $faker->email;
            $this->employees[$i]['phone'] = $faker->e164PhoneNumber;
            $this->employees[$i]['date_of_birth'] = $faker->dateTimeThisCentury->format('Y-m-d');
            $this->employees[$i]['photo'] = "avatar".ceil($i/10).".jpg";
            $this->employees[$i]['created_at'] = gmdate("Y-m-d H:i:s");
            $this->employees[$i]['updated_at'] = gmdate("Y-m-d H:i:s");
        }
    }
}
