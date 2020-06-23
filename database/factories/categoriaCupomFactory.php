<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Categoria_cupom;
use Faker\Generator as Faker;

$factory->define(\App\Categoria_cupom::class, function (Faker $faker) {
    return [
        'descricao' => $faker->sentence
    ];
});
