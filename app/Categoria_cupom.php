<?php

namespace App;

use categoria_cupom as GlobalCategoria_cupom;
use Illuminate\Database\Eloquent\Model;

class Categoria_cupom extends Model
{
    //
    protected $table = 'categoria_cupom';

    public function empresa_promotora()
    {
        return $this->hasMany(Empresa_promotora::class);
    }
}
