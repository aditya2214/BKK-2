<?php

use Illuminate\Database\Seeder;
use Faker;

class Attendances extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 101; $i++){

        $gender = $faker->randomElement(['male', 'female']);

        DB::table('attendances')->insert([
                'id_vacancy' => $i,
                'full_name'  => $faker->name,
                'gender' => $faker->name($gender),
                'active_email' => $faker->safeEmail,
                'nik' =>  $faker->randomDigit,
                'kabupaten' => $faker->word,
                'address' => $faker->address,
                'place' => $faker->address,
                'date_and_place' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'age' => $faker->numberBetween(19,23),
                'height' => $faker->numberBetween(165,170),
                'weight' => $faker->numberBetween(65,70),
                'school' => $faker->randomElement(['SMK PGRI 2 KARAWANG','SMK 1 KARAWANG']),
                'graduation_year' => $faker->date($format = 'Y', $max = 'now'),
                'experience' => $faker->word,
                'no_handphone' => $faker->phoneNumber
            ]);
        }
    }
}
