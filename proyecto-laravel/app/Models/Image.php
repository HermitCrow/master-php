<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    // Realcion one to many con los comentarios

    
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'image_id');
    }   

    //Relacion one to many with likes / de uno a muchos con los me gusta
    
    public function likes(): HasMany
    {
        return $this->hasMany(Like::class, 'image_id');
    }
    
    //relacion de muchos a uno con el usuario
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
