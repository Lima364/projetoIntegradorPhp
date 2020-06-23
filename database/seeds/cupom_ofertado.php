<?php

use Illuminate\Database\Seeder;

class Cupom_ofertado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cupom_ofertado::class, 20)->create();
        
    }
}
