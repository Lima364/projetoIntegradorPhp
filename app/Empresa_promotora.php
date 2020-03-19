<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa_promotora extends Model
{
    //
    protected $table = 'empresa_promotora';
    protected $fillable = ['nome_empresa'];
    
  
    public function categoria_cupom()
    {
        return $this->belongsTo(Empresa_promotora::class);
    }

    
}
