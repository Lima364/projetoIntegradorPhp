<?php

use Illuminate\Database\Seeder;

class Categoria_cupom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Categoria_cupom::class, 20)->create();
    
        // factory(\App\Categoria_cupom::class, 20)->create()->each(function ($categoria_cupom)
        // {
        //     $user->empresa_promotora()->save(factory(\App\Empresa_promotora::class)->make());
        // });
     
    }
}
