<?php

namespace App\Models;

use App\models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    protected $fillable = ['liked'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
