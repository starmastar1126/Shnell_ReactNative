<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    protected $table ='users';
    public $primaryKey='userid';
    public $timestamps=true;

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

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getUserName()
    {
        return $this->firstname . " " . $this->lastname;
    }

    public function getUserRole()
    {
        return $this->role;
    }

    public function getId()
    {
        return $this->userid;
    }

    public function getFactory()
    {
        return $this->factoryName;
    }

}
