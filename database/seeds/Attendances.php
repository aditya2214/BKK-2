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
        factory(\App\Attendance::class,250)->create();
    }
}
