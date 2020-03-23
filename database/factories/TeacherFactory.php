<?php

use App\Model\Teacher;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

/** @var EloquentFactory $factory */
$factory->define(
    Teacher::class,
    static function (Faker $faker) {
        return [
            'name'    => $faker->name,
            'profile' => $faker->paragraph,
        ];
    }
);
