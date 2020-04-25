<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 7; $i++) {
            $position = $i + 1;
            DB::table('employees')->insert([
            'position_id'       => $position,
            'name'     => $faker->name,
            'alamat'   => $faker->address,
            'phone'             => $faker->randomDigit,
            'email'            => $faker->safeEmail,
            ]);
        }
    }
}
