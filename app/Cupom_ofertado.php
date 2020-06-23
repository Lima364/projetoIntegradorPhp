<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupom_ofertado extends Model
{
    //
    protected $table = 'cupom_ofertado';
    protected $fillable = ['imagem_cupom', 'descricao_cupom', 'codigo_desconto'];

    // public function empresa_promotora()
    // {
    //     return $this->hasMany(Empresa_promotora::class);
    // }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cupomOfertado_user()
    {
        // return_$this->belongsToMany(User::class);
        return $this->belongsToMany(User::class, 'cupom_copiado_user_table');
    }
}
