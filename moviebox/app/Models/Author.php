<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    protected $fillable = [
        'name','birth_date'
    ];

 protected function casts(): array
 {
     return [
         'birth_date' => 'date',
     ];
 }

    public function movies(): BelongsToMany{
        return $this->belongsToMany(Movie::class);
    }
}
