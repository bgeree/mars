<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Course;
use Faker\Generator as Faker;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'code' => $faker->slug,
        'workshop_id' => 0, //TODO: $faker->
        'name' => $faker->catchPhrase,
        'name_english' => $faker->bs,
        'type' => $faker->randomElement(Course::TYPES),
        'credits' => $faker->randomDigit,
        'hours' => $faker->dateTimeInInterval('-1 week', '+ 1 week'),
        'semester_id' => 0, //TODO: $faker->
        'teacher_id' => 0, //TODO: $faker->
        'updated_at' => now(),
        'created_at' => now(),
    ];
});