<?php

use App\Model\Lesson;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

/** @var EloquentFactory $factory */
$factory->define(
    Lesson::class,
    static function (Faker $faker) {
        return [
            'title'       => $faker->realText(30),
            'description' => $faker->paragraph,
            'course_id'   => 0
        ];
    }
);
