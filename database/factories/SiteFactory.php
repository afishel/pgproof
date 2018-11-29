<?php

use Faker\Generator as Faker;

$factory->define(App\Site::class, function (Faker $faker) {
    $address = $faker->buildingNumber . ' ' . $faker->streetName . ' ' . $faker->streetSuffix;

    return [
        'uuid' => $faker->uuid,
        'organization_id' => $faker->numberBetween(1, 150),
        'region_id' => $faker->numberBetween(1, 30),
        'name' => $faker->company,
        'address' => $address,
        'address2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode,
        'phone' => $faker->phoneNumber,
        'fax' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
    ];
});
