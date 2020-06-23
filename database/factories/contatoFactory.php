<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contato;
use Faker\Generator as Faker;

$factory->define(\App\Contato::class, function (Faker $faker) {
    return [
        'nome_contato'=> $faker->name,
        'email'=> $faker->unique()->safeEmail,
        'mensagem'=> $faker->sentence   
    ];
});
