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
        'name','last_name','email','password','profession_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts=[
        'is_admin' => 'boolean',
    ];


    public function profession(){    // profession_id
        return $this->belongsTo(Profession::class);
    }

    public function sales(){
        return $this->hasMany(Sale::class);
    }


    public function isAdmin(){
        return $this->is_admin;
    }
}
