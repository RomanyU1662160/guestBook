<?php

namespace App\models;

use App\Models\Event;
use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    protected $fillable = [
        body, user_id
    ];

    //Elequent relationship with the User table "1-0"
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Elequent relationship with the events table "1-0"
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    // Elequent relationship with the Likes table "0-1"
    public function likes()
    {
        return $this->hasMany(Like);
    }
}
