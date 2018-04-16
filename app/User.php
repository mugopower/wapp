<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'surname', 'phone', 'company', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token', 'admin',
    ];

    const ADMIN_TYPE = 1;
    const DEFAULT_TYPE = 0;
    
    public function isAdmin()    {        
    return $this->admin === self::ADMIN_TYPE; 
    }

}    
