<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Empresa_promotora::class, function (Faker $faker) {
    return [
        'nome_empresa'=> $faker->company
    ];
});
