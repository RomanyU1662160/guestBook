<?php

namespace App\Models;

use App\models\Post;
use App\Models\Event;
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
        'fname', 'lname', 'address1', 'address2', 'email', 'password',
    ];

    //return all the posts created by the user

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }


    // return all the events created by the user 

    public function events()
    {
        return $this->hasMany(Event::class);
    }


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
