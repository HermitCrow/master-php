<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $table = 'likes';

  //Relation many to one with user/ relacion muchos a uno con el usuario.
     
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

  //Relation many to one with image/ relacion muchos a uno con las imagenes.
    
    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id');
    }
}
