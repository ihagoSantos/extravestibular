<?php

namespace extravestibular;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo', 'dados'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'tipo',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dadosUsuario()
    {
        return $this->belongsTo('extravestibular\DadosUsuario', 'dados');
    }

    public function inscricao()
    {
        return $this->hasMany('extravestibular\Inscricao');
    }

    public function isencao()
    {
        return $this->hasMany('extravestibular\Isencao');
    }

    public function recurso()
    {
        return $this->hasMany('extravestibular\Recurso');
    }
}
