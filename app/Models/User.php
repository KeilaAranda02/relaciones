<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function profile()
    {
        //un usuario tiene un solo perfil
        return $this->hasOne(Profile::class);
    }


     //Ver el nivel al que pertecenec un usario
    public function level()
    {
       return $this->belongsTo(Level::class);
    }

    
    public function groups()
    { //Un usuario tiene y pertenece a  muchos grupos.
        return $this->belongsToMany(Group::class)->withTimestamps();
    }


    public function location()
    {
        //tengo uno a traves de perfil. Tengo una localizacion a traves de perfil
        return $this->hasOneThrough(Location::class, Profile::class);
    }

    public function posts()
    {
        //un usuario tiene muchos posts
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function comments()
    {
        //un usuario tiene muchos comentarios
        return $this->hasMany(Comment::class);
    }

    public function image()
    {
        
        return $this->morphOne(Image::class, 'imageable');
    }
}
