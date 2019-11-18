<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillabe = ['name', 'email', 'password', 'birthday'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * Add a mutator to ensure hashed passwords
     */
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }
}
