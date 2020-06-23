<?php

use Illuminate\Database\Seeder;

class Empresa_promotora extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Empresa_promotora::class, 20)->create();
        
    }
}
