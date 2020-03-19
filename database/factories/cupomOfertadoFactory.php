<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Cupom_ofertado::class, function (Faker $faker) {
    return [
        'imagem_cupom'=> $faker->imageUrl($width = 200, $height = 200),
        'descricao_cupom'=> $faker->sentence,  
        'codigo_desconto'=> $faker->sentence
    ];
});
