<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Avaliar_cupom::class, function (Faker $faker) {
    return [
        'estrela'=> $faker->random(1, 5),
        'avaliacao'=> $faker->paragraph(5, true),
        
    ];
});
