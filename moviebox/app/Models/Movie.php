<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    protected $fillable = ['title', 'director','year', 'duration' ,'genre_id'];

    public function genre():BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }


    public function actors(): BelongsToMany{
        return $this->belongsToMany(Author::class);
    }


}
