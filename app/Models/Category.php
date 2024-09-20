<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //relacion entre categorias y post
    public function posts()
    {
        //una categoria tiene muchos posts
        return $this->hasMany(Post::class);
    }
    public function videos()
    {
        //tambien una categoria tiene muchos videos
        return $this->hasMany(Video::class);
    }
}
