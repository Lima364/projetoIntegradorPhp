<?php

use Illuminate\Database\Seeder;

class Avaliar_cupom extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Avaliar_cupom::class, 20)->create();

    }
}
