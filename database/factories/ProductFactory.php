<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->words($nb = 3, $asText = true),
        'price' => $faker->numberBetween($min = 1, $max = 1000),
        'sku' => $faker->ean8(),
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'weight' => $faker->randomDigit(),
        'height' => $faker->randomDigit(),
        'color' => $faker->rgbcolor(),
        'brand' => $faker->company(),
        'manufacturer' => $faker->company(),
        'manufacturing_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'discount' => $faker->numberBetween($min = 0.1, $max = 0.9),
        'is_on_sale' => $faker->boolean(),
    ];
});
