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
        'user_firstname', 'user_lastname','user_email', 'user_password',
    ];

    protected $primaryKey = "user_id";
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'remember_token',
    ];
    /**
     * @DateOfCreation      27-November-2018
     * @ShortDescription    This function overrides the method 
     * @return object [password object to match for login]
     */
    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
