<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliar_cupom extends Model
{
    //
    protected $table = 'avaliar_cupom';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
