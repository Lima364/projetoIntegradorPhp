<?php

use Illuminate\Database\Seeder;

class Cupom_copiado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Cupom_copiado::class, 20)->create();
        
    }
}
