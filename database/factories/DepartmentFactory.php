<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    // $title = $faker->unique()->randomElement($array = array('TI','GP','GM','GE','CD'));
    
    // switch ($title) {
    //     case 'TI':
    //         $name =  "Technologie Informatique";
    //         break;
    //     case 'GP':
    //         $name = "Génie des Procédés";
    //         break;
    //     case 'GE':
    //         $name = "Génie Eléctrique";
    //         break;
    //     case 'GM':
    //         $name = "Génie Mécanique";
    //         break;
    //     case 'CD':
    //         $name = "Commerce et Distibution";
    //         break;
    //     default:
    //         break;
    // }
    // return [ 
    //     'title' => $title,
    //     'name' => $name,     
    // ];
    return [
        'title' => $faker->unique()->randomElement($array = array('TI','GP','GM','GE','CD')),
        'name' => $faker->word,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
