<?php

use App\Model\Course;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\Carbon;

/** @var EloquentFactory $factory */
$factory->define(
    Course::class,
    static function (Faker $faker) {
        $startTime = $faker->dateTimeBetween('+1 day', '+3 months');
        $price     = $faker->randomNumber(4);
        return [
            'name'             => $faker->realText(30),
            'description'      => $faker->paragraph,
            'start_time'       => $startTime,
            'end_time'         => Carbon::instance($startTime)->addHours(3),
            'teacher_id'       => 0,
            'price'            => $price,
            'discounted_price' => random_int(1, 100) >= 50 ? $price - 100 : 0,
            'spaces'           => random_int(15, 35),
            'objectives'       => implode("\n", $faker->paragraphs(random_int(3, 5))),
            'eligibility'      => implode("\n", $faker->paragraphs(random_int(2, 4))),
            'tags'             => $faker->randomElements(
                ['design', 'coding', 'science', 'art', 'games'],
                random_int(1, 2)
            ),
        ];
    }
);
