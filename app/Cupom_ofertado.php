<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupom_ofertado extends Model
{
    //
    protected $table = 'cupom_ofertado';

    // public function empresa_promotora()
    // {
    //     return $this->hasMany(Empresa_promotora::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public fuction cupomOfertado_user()
    {
        // return_$this->belongsToMany(User::class);
        return $this->belongsToMany(User::class, ‘cupom_copiado_user_table’);
    }
}
