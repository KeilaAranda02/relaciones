<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    public function user()
    {
        //un video pertenece a un usuario
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        //un video pertenece a una categoria
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        //un video tiene muchos comentarios
        return $this->morphMany(Comment::class, 'commentable');
    }
    public function images()
    {
        //un video tiene una imagen
        return $this->morphOne(Image::class, 'imageable');
    }
    public function tags()
    {
        //un video puede tener muchas etiquetas
        return $this->morphMany(Tag::class, 'taggable');
    }
}
