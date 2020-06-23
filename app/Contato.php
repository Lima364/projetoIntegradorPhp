<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    // use Notifiable;
    
    //
    protected $table = 'contato';
    protected $fillable = ['nome_contato', 'email', 'mensagem'];
}
