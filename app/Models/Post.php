<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function user()
    {
        //un post pertenece a un usuario
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        //como pertenece a un usuario entonces pertenece a una categoria
        //una categoria tiene muchos post
        return $this->belongsTo(Category::class);
    }

    //METODOS POLIMORFICOS
    public function comments()
    {
        //un post puede tener muchos comentarios. Relacion 1 a m
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function images()
    {
        
        return $this->morphOne(Image::class, 'imageable');
    }

    public function tags()
    {
        //relacion m a m
        return $this->morphMany(Tag::class, 'taggable');
    }
}
