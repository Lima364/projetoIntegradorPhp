<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

    public function cupom_ofertado()
        {
            return $this->hasMany(Cupom_ofertado::class);
        }
    
    public fuction user_cupomOfertado()
        {
            // return_$this->belongsToMany(Cupom_ofertado::class);
            return $this->belongsToMany(Cupom_ofertado::class, ‘cupom_copiado_user_table’);
     }

    public function avaliar_cupom()
        {
            return $this->hasMany(Avaliar_cupom::class);
        }

