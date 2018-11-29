<?php

use Faker\Generator as Faker;

$factory->define(App\Inspection::class, function (Faker $faker) {
    $scheduled_at = $faker->dateTime();
    $started_at = array_random([$faker->dateTimeBetween($scheduled_at, 'now'), null]);
    $ended_at = $started_at ? array_random([$faker->dateTimeBetween($started_at, 'now'), null]) : null;

    return [
        'uuid' => $faker->uuid,
        'site_id' => $faker->numberBetween(1, 350),
        'inspection_status_id' => $faker->numberBetween(1, 3),
        'inspection_type_id' => $faker->numberBetween(1, 10),
        'inspector_id' => $faker->numberBetween(1, 50),
        'inspection_recurrence_id' => null,
        'auto_complete' => $faker->numberBetween(0, 1),
        'comments' => array_random([$faker->paragraph, $faker->sentence, $faker->words(3, true), '']),
        'scheduled_at' => $scheduled_at,
        'started_at' => $started_at,
        'ended_at' => $ended_at,
    ];
});
