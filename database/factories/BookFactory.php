<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attendance;
use Faker\Generator as Faker;

$factory->define(\App\Attendance::class, function (Faker $faker) {
    return [
        'id_vacancy' => $faker->numberBetween(1,2),
        'full_name'  => $faker->name,
        'gender' =>  $faker->randomElement(['Pria','Wanita']),
        'active_email' => $faker->safeEmail,
        'nik' =>  $faker->randomDigit,
        'kabupaten' => $faker->word,
        'address' => $faker->address,
        'place' => $faker->state,
        'date_and_place' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'age' => $faker->numberBetween(19,23),
        'height' => $faker->numberBetween(165,170),
        'weight' => $faker->numberBetween(65,70),
        'school' => $faker->randomElement(['SMK PGRI 2 KARAWANG','SMK 1 KARAWANG']),
        'graduation_year' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'experience' => $faker->word,
        'no_handphone' => $faker->phoneNumber
    ];
});
