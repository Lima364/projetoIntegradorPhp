<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa_promotora extends Model
{
    //
    protected $table = 'empresa_promotora';
  
    public function categoria_cupom()
    {
        return $this->belongsTo(Empresa_promotora::class);
    }

    
}
