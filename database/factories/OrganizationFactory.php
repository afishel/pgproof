<?php

use Faker\Generator as Faker;

$factory->define(App\Organization::class, function (Faker $faker) {
    $address = $faker->buildingNumber . ' ' . $faker->streetName . ' ' . $faker->streetSuffix;

    return [
        'uuid' => $faker->uuid,
        'company_id' => $faker->numberBetween(1, 50),
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
