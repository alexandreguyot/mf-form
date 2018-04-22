<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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

    public function listOfAdmin() {
        return ($this->email === 'florent.morel@gmail.com'
        || $this->email === 'a.pro.guyot@gmail.com'
        || $this-> email === 'sourisseauguillaume@gmail.com');
    }


    public function specifications()
    {
        return $this->belongsTo('App\Specifications');
    }
}
