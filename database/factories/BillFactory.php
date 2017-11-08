<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Bill::class, function (Faker $faker) {
    return [
        'bill_name'=> $faker->companyName,
        'amount'   => $faker->price,
        'due_date' => $faker->recent,
        'recurring' => $faker->boolean,
        'category'  => $faker->departmentphp,
    ];
});
