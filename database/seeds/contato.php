<?php

use Illuminate\Database\Seeder;

class Contato extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Contato::class, 20)->create();
        
    }
}
