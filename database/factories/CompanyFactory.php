<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    $address = $faker->buildingNumber . ' ' . $faker->streetName . ' ' . $faker->streetSuffix;

    return [
        'uuid' => $faker->uuid,
        'name' => $faker->company,
        'address' => $address,
        'address2' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode,
        'phone' => $faker->phoneNumber,
        'phone2' => $faker->phoneNumber,
        'website' => $faker->url,
        'contact' => $faker->name,
        'sales_person' => $faker->name,
        'lead_source' => $faker->words(3, true),
        'logo' => $faker->imageUrl(640, 480),
        'auto_complete_inspections' => $faker->numberBetween(0, 1),
    ];
});
