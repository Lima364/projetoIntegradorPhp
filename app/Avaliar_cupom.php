<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliar_cupom extends Model
{
    //
    protected $table = 'avaliar_cupom';
    protected $fillable = ['estrela', 'avaliacao'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
