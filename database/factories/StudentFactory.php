<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;


$factory->define(Student::class, function (Faker $faker) {
    $department = App\Department::pluck('id')->toArray();
    return [
        'cin' => $faker->ean8,
        'name' => $faker->name(),
        'age' => $faker->biasedNumberBetween($min=19, $max=26),
        'department' => $faker->randomElement($array = array('TI','GP','GM','GE','CD')),
        'created_at' => now(),
        'updated_at' => now(),
        // 'department_id' => function() {
        //     return factory(\app\Department::class)->create()->id;
        // }
        'department_id' => $faker->randomElement($department)
    ];
});
